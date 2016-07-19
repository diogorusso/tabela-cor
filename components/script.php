<script type="text/javascript">

        function calcBudget () {
            //Project 
            var projectBudget = parseInt(jQuery('#projectBudget').val());
            

            // Indexes
            var taxIndex = parseInt(jQuery('#taxIndex').val());
            var comercialIndex = parseInt(jQuery('#comercialIndex').val());
            var managementIndex = parseInt(jQuery('#managementIndex').val());
            var devIndex = parseInt(jQuery('#devIndex').val());
            var savingsIndex = 100-(taxIndex+comercialIndex+managementIndex+devIndex);

            jQuery("#savingsIndex").val(savingsIndex);

            //Value
            var taxValue = parseInt(projectBudget*(taxIndex/100));
            var comercialValue = parseInt(projectBudget*(comercialIndex/100));
            var managementValue = parseInt(projectBudget*(managementIndex/100));
            var devValue = parseInt(projectBudget*(devIndex/100));
            var savingsValue = parseInt(projectBudget*(savingsIndex/100));

            //total Value
            var totalValue = taxValue+comercialValue+managementValue+devValue+savingsValue;
            var errorValue = (projectBudget-totalValue)* -1;

            //update Value column
            
            jQuery("#taxValue").val(taxValue);
            jQuery("#comercialValue").val(comercialValue);
            jQuery("#managementValue").val(managementValue);
            jQuery("#devValue").val(devValue);
            jQuery("#savingsValue").val(savingsValue);

            jQuery("#totalValue").html('<span style="font-size:18px">total value: $ <b>'+totalValue+'</span></b> | round $ <b>'+errorValue+'</b>');

            //update Value column
                

            // update info board

            jQuery("#infoBudget").html('<b>Budget:</b> $ '+projectBudget);
            jQuery("#infoTax").html('<b>Tax:</b> $ '+taxValue);
            jQuery("#infoComercial").html('<b>Comercial:</b> $ '+comercialValue);
            jQuery("#infoManagement").html('<b>Management:</b> $ '+managementValue);
            jQuery("#infoDev").html('<b>Development:</b> $ '+devValue);
            jQuery("#infoSavings").html('<b>Savings:</b> $ '+savingsValue);


            // update info mobile

            jQuery("#infoBudget_m").html('<b>Budget:</b> $ '+projectBudget);
            jQuery("#infoTax_m").html('<b>Tax:</b> $ '+taxValue);
            jQuery("#infoComercial_m").html('<b>Comercial:</b> $ '+comercialValue);
            jQuery("#infoManagement_m").html('<b>Management:</b> $ '+managementValue);
            jQuery("#infoDev_m").html('<b>Development:</b> $ '+devValue);
            jQuery("#infoSavings_m").html('<b>Savings:</b> $ '+savingsValue);


            // update info board

            if (savingsValue>=0 && savingsIndex>=0 && projectBudget >=0){
                createChart(taxValue, comercialValue, managementValue, devValue, savingsValue);
                jQuery('#viewChart').css("display", "");
                jQuery('#overBudget').css("display", "none");
                jQuery('#welcome').css("display", "none");
                jQuery('#project input[type=number]').css("background-color", "#abe1b4");
                
            }//create chart conditional

            else{
                jQuery('#overBudget').css("display", "");
                jQuery('#viewChart').css("display", "none");
                jQuery('#welcome').css("display", "none");
                jQuery('#project input[type=number]').css("background-color", "#ce0b0b");
                jQuery('#project input[type=number]').css("color", "#fff");
            }//create chart conditional

        }//calcBudget


        function createChart (tax, comercial, management, dev, savings) {

            var data = [
                        {value: parseInt(tax), color:"#ce0b0b"},
                        {value: parseInt(comercial), color : "#993399"},
                        {value: parseInt(management), color : "#663399"},
                        {value: parseInt(dev), color : "#333399"},
                        {value: parseInt(savings), color : "#5bb22c"}
                        ];
            var ctx = jQuery("#myChart").get(0).getContext("2d");
            var myNewChart = new Chart(ctx).Pie(data);

        }//createChart

        function getProjectTitle (projectTitle){

            var projectName = jQuery('#projectName').val();
            jQuery("#infoProject").html('<b>Project:</b> '+projectName);
            jQuery("#infoProject_m").html('<b>Project:</b> '+projectName);
            
            if (projectName !=0){
                 jQuery("#inputName").html(': )');
            }
            else{
                jQuery("#inputName").html('?');
            }

        }//getProjectTitle

        function getPdf() {
            var doc = new jsPDF('p');
            var source = $('#info') [0];
            var projectName = jQuery('#projectName').val();
                    
            if(source != 0) {

                doc.setFontSize(18);
                doc.fromHTML($('#info').html());
                doc.save('tabela-cor-'+projectName+'.pdf');
            };
        };//getPDF

        function reload(){

            jQuery("#taxIndex").val(10);
            jQuery("#comercialIndex").val(15);
            jQuery("#managementIndex").val(20);
            jQuery("#devIndex").val(50);
            jQuery("#savingsIndex").val(5);
            
        };//reload
        
        jQuery('#reload').click(calcBudget); // btn reset

        //input updates type and change

        jQuery('#budgetField , #index').keyup(calcBudget);
        jQuery('#projectName').keyup(getProjectTitle);
        jQuery('#projectBudget , #index').change(calcBudget);


</script>