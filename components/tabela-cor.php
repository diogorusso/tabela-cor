<div class="row" id="project">
    <div class="col-lg-4 col-md-4 col-sm-6">
        <label ><h4>Project Name</h4></label>
        <div class="input-group">
            <span class="input-group-addon"><div id="inputName">?</div></span>
            <input id="projectName" type="text" placeholder="insert">
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6" >
        <div class="control-group" id="budgetField">
            <label><h4>Budget</h4></label>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input id="projectBudget" type="number">
            </div>
        </div>
    </div>
</div>
<br/>
<div class="row">

    <div class="col-lg-3 col-md-3 col-sm-6" id="index">

        <legend><h2>Index</h2></legend>
        <label>
            <abbr title="Tax %">Tax</abbr>
        </label>
        <div class="input-group" id="taxIndexInput">
            <span class="input-group-addon">%</span>

            <input  id="taxIndex" type="number" placeholder="Project Tax" value="10">
        </div> <!-- Tax Index -->
        <label>
            <abbr title="Tax %">Comercial</abbr>
        </label>
        <div class="input-group" id="comercialIndexInput">
            <span class="input-group-addon">%</span>
            <input  id="comercialIndex" type="number" placeholder="Comercial" value="15">
        </div> <!-- Comercial Index -->
        <label>
            <abbr title="Management %">Management</abbr>
        </label>
        <div class="input-group" id="managementIndexInput">
            <span class="input-group-addon">%</span>
            <input id="managementIndex" type="number" placeholder="Management" value="20">
        </div><!-- Management Index -->
        <label>
            <abbr title="Development %">Development</abbr>
        </label>
        <div class="input-group" id="devIndexInput">
            <span class="input-group-addon">%</span>
            <input id="devIndex" type="number" placeholder="Development" value="50">
        </div><!-- Development Index -->
        <label>
            <abbr title="Savings %">Savings</abbr>
        </label>
        <div class="input-group" id="savingsIndexInput">
            <span class="input-group-addon">%</span>
            <input id="savingsIndex" type="number" placeholder="Savings" value="5" readonly>
        </div><!-- Emergency Index -->

    </div> <!-- INDEX-->

    <div class="col-lg-3 col-md-3 col-sm-6">

        <legend><h2>Value</h2></legend>
        <label>
            <abbr title="Tax $">Tax</abbr>
        </label>
        <div class="input-group" id="taxValueInput">
            <span class="input-group-addon">$</span>
            <input type="number" id="taxValue" readonly>
        </div><!-- Tax Value -->
        <label>
            <abbr title="Tax $">Comercial</abbr>
        </label>
        <div class="input-group" id="comercialValueInput">
            <span class="input-group-addon">$</span>
            <input type="number" id="comercialValue"  readonly>
        </div><!-- Comercial Value -->
        <label>
            <abbr title="Tax $">Management</abbr>
        </label>
        <div class="input-group" id="managementValueInput">
            <span class="input-group-addon">$</span>
            <input type="number" id="managementValue" readonly>
        </div><!-- Management Value -->
        <label>
            <abbr title="Tax $">Development</abbr>
        </label>
        <div class="input-group" id="devValueInput">
            <span class="input-group-addon">$</span>
            <input type="number" id="devValue" readonly>
        </div><!-- Dev Value -->
        <label>
            <abbr title="Tax $">Savings</abbr>
        </label>
        <div class="input-group" id="savingsValueInput">
            <span class="input-group-addon">$</span>
            <input type="number" id="savingsValue" readonly="readonly">
        </div><!-- Emergency Value -->

    </div> <!-- VALUES -->

    <div class="col-lg-4 col-md-4 hidden-sm hidden-xs" style="text-align:center;">

        <legend><h2>Chart</h2></legend>
        <div id="welcome"><?php include "components/tabela-cor_welcome.php"; ?></div>
        <div id="viewChart" style="display:none;">'<?php include "components/tabela-cor_myChart.php"; ?>'</div>
        <div id="overBudget" style="display:none;"><?php include "components/tabela-cor_overBudget.php"; ?></div>

    </div> <!-- CHART -->

    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
        <legend><h2>Info</h2></legend>
        <div id="info">
            <p id="infoProject">Fill Project Name</p>
            <p id="infoBudget">Fill Budget</p>
            <p id="infoTax"></p>
            <p id="infoComercial"></p>
            <p id="infoManagement"></p>
            <p id="infoDev"></p>
            <p id="infoSavings"></p>
        </div>
        <hr/>
        <div id="btn" class="col-sm-6 col-xm-12">
            <button type="button" class="btn btn-primary btn-lg" onclick="getPdf()">save INFO</button>
            <br/><br/>
            <button type="button" class="btn btn-default" onclick="reload()">Reset Index</button>
            <br/><br/>
        </div>
    </div><!-- INFO -->

    <div class="col-sm-12 hidden-lg hidden-md">
        <legend><h2>Info</h2></legend>
        <div id="info_m" class="col-sm-6 col-xm-12">
            <h3 id="infoProject_m">Fill Project Name</h3>
            <h3 id="infoBudget_m">Fill Budget</h3>
            <h3 id="infoTax_m"></p>
            <h3 id="infoComercial_m"></h3>
            <h3 id="infoManagement_m"></h3>
            </h3 id="infoDev_m"></h3>
            </h3 id="infoSavings_m"></h3>
        </div>
        <hr>
        <div id="btn" class="col-sm-6">
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="getPdf()">save INFO</button>
            <br/>
            <button type="button" class="btn btn-default btn-block" onclick="reload()">Reset Index</button>
            <br/><br/>
        </div>
    </div>
</div>
