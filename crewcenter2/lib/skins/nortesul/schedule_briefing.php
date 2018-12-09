<section class="content-header">
      <h1>
        <b>Criar/Alterar</b> Briefing Eletrônico NS<?php echo $schedule->flightnum; ?>
      </h1>
    </section>
	<section class="content container-fluid">
		<div class="row">
		   <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informações<small> NS<?php echo $schedule->flightnum; ?> | <?php echo date("d.m.Y");?> | <?php echo "{$schedule->depicao}"; ?> - <?php echo "{$schedule->arricao}"; ?></small></h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
                
                <form id="sbapiform">
                <table class="table table-hover" style="text-transform:uppercase" ;="">
                   <tbody><tr>
                <th>Número do Voo</th>
                <th>Aeronave</th>
                <th></th>
                <th>STD</th>
                <th>DEP</th>
                <th>ARR</th>
                <th>STA</th>
                <th>PIC</th>
                </tr>
                <tr>
                <td>NS<?php echo "{$schedule->flightnum}"; ?></td>
                <td><?php
                        
                         $allaircraft = OperationsData::GetAllAircraft(true);
foreach($allaircraft as $aircraft)
                             
			if($aircraft->registration == $schedule->registration)
			{
			echo $aircraft->icao;
                         }
                         ?></td>
                <td><?php echo "{$schedule->registration}"; ?></td>
                <td><?php echo "{$schedule->deptime}"; ?></td>
                <td><b><?php echo $schedule->depicao; ?></b></td>
                <td><b><?php echo $schedule->arricao; ?></b></td>
                <td><?php echo "{$schedule->arrtime}"; ?></td>
                <td><?php echo Auth::$userinfo->firstname; ?> <?php echo Auth::$userinfo->lastname; ?></td>
                </tr>
                </tbody>
              </table>
			</div>
			

</div>
</div>
<section class="col-lg-4 connected">
            <div class="box box-primary">
                            <div class="box-header with-border">
                    <h3 class="box-title">Alterar  NS<?php echo "{$schedule->flightnum}"; ?></h3>
                </div>
                <div class="box-body table-responsive">
<table class="table table-hover">
                <tbody>
                <tr>
                                        <td>Alterar ETD</td>
                        <td><select class="form-control" name="deph"><option value="1" selected="selected">Selecione a Hora</option>
<option value="1">01:</option>
<option value="2">02:</option>
<option value="3">03:</option>
<option value="4">04:</option>
<option value="5">05:</option>
<option value="6">06:</option>
<option value="7">07:</option>
<option value="8">08:</option>
<option value="9">09:</option>
<option value="10">10:</option>
<option value="11">11:</option>
<option value="12">12:</option>
<option value="13">13:</option>
<option value="14">14:</option>
<option value="15">15:</option>
<option value="16">16:</option>
<option value="17">17:</option>
<option value="18">18:</option>
<option value="19">19:</option>
<option value="20">20:</option>
<option value="21">21:</option>
<option value="22">22:</option>
<option value="23">23:</option>
<option value="24">24:</option></select></td>
<td><select class="form-control" name="depm"><option value="55" selected="selected">Selecione os Minutos</option>
            <option value="00">00</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
            <option value="55">55</option>
            <option value="56">56</option>
            <option value="57">57</option>
            <option value="58">58</option>
            <option value="59">59</option>
</select></td>

                </tr>
                <tr>
                        <td>Rota<br><sup>Deixe em branco para despacho</sup><br><a href="http://rfinder.asalink.net/free/" id="rflink" target="_blank"><img class="routeimg" style="width:41px;height:17px;padding:2px 0px;margin-right:0px;margin-left:0px" src="https://www.simbrief.com/images/routefinder.png" alt="RouteFinder" title="RouteFinder"></a></td>
             
                        <td colspan="2"><textarea rows="8" cols="50" class="form-control" type="text" name="route" placeholder="<?php echo $schedule->route; ?>" value=""></textarea></td>
                </tr>
                <tr>
                        <td>Altitude Estimada<br><sup>em pés ou FL</sup></td>
             
                        <td colspan="2"><input class="form-control" type="text" name="fl" placeholder="<?php echo $schedule->flightlevel; ?>" value=""></td>
                </tr>
                <tr>
                        <td>Alternativo<br><sup>Deixe em branco para despacho</sup></td>
             
                        <td colspan="2"><input class="form-control" type="text" name="altn_1_id" placeholder="" value=""></td>
                </tr>
                <tr>
                        <td>2 Alternativo<br><sup>Deixe em branco para despacho</sup></td>
            
                        <td colspan="2"><input class="form-control" type="text" name="altn_2_id" placeholder="" value=""></td>
                </tr>
                <tr>
                        <td>Unidades</td>
                        <td colspan="2"><select name="units" class="form-control"><option value="KGS" selected="">KGS</option><option value="LBS">LBS</option></select></td>
                </tr>
        </tbody>
</table>
                        </div>
                    </div>
</section>
<section class="col-lg-4 connected">
            <div class="box box-primary">
                           <div class="box-header with-border">
                    <h3 class="box-title">Opções/Criar NS<?php echo "{$schedule->flightnum}"; ?></h3>
                    </div>
                <div class="box-body table-responsive">
<table class="table table-hover">
                <tbody>
                                
                                <tr><td>PAX Estimados<br><sup>PAX: 74.4 Kgs / BAG: 25 Kgs</sup></td>
                <td><input class="form-control" type="text" readonly="readonly" name="pax" value="<?php
                        
                         $allaircraft = OperationsData::GetAllAircraft(true);
foreach($allaircraft as $aircraft)
                             
			if($aircraft->registration == $schedule->registration)
			{
				$pct = rand(1, 100);
				$pctpassa = $pct/100;
                $pax = round($aircraft->maxpax * $pctpassa, 0);
				echo $pax;
                         
                         }
                         ?>"></td>
                </tr>
                <tr>
                </tr><tr>
                <td>Carga Estimada<br><sup>em tons</sup></td>
                <td><input class="form-control" type="text" name="cargo" readonly="readonly" value="<?php
                        
                         $allaircraft = OperationsData::GetAllAircraft(true);
foreach($allaircraft as $aircraft)
                             
			if($aircraft->registration == $schedule->registration)
			{
				$pctcargo = rand(1, 100);
				$pctpassacargo = $pctcargo/100;
                         $carga =  round($aircraft->maxcargo * $pctpassacargo, 0) ;
						 echo $carga/1000;
						 }
                         
                         ?>"></td>
                </tr>
                <tr>
                <td>Cost Index (CI)</td>
                <td><select class="form-control" name="civalue"><option value="25" selected="selected">A320</option>
				<option value="27">B738</option>
                <option value="AUTO">AUTO (PIC)</option>
                </select></td>
                </tr>
				<tr>
                        <td>Comb. Cont<br></td>
                        <td><select class="form-control" name="contpct"><option value="auto" selected="">AUTO</option><option value="0">0 PCT</option><option value="0.02">2 PCT</option><option value="0.03">3 PCT</option><option value="0.05">5 PCT</option><option value="0.07">7 PCT</option><option value="0.1">10 PCT</option><option value="0.15">15 PCT</option><option value="0.2">20 PCT</option></select></td>
                </tr>
				<tr>
                        <td>Comb. Reserva<br></td>
                        <td><select class="form-control" name="resvrule"><option value="auto" selected="">AUTO</option><option value="0">0 MIN</option><option value="15">15 MIN</option><option value="30">30 MIN</option><option value="45">45 MIN</option><option value="60">60 MIN</option><option value="75">75 MIN</option><option value="90">90 MIN</option></select></td>
                </tr>
				<tr>
                        <td>Comb. Extra<br><sup>em tons</sup></td>
             
                        <td colspan="2"><select class="form-control" name="addedfuel" id="addedfuel"><option value="0" selected="">0.0</option><option value="0.1">0.1</option><option value="0.2">0.2</option><option value="0.3">0.3</option><option value="0.4">0.4</option><option value="0.5">0.5</option><option value="0.6">0.6</option><option value="0.7">0.7</option><option value="0.8">0.8</option><option value="0.9">0.9</option><option value="1">1.0</option><option value="1.1">1.1</option><option value="1.2">1.2</option><option value="1.3">1.3</option><option value="1.4">1.4</option><option value="1.5">1.5</option><option value="1.6">1.6</option><option value="1.7">1.7</option><option value="1.8">1.8</option><option value="1.9">1.9</option><option value="2">2.0</option><option value="2.1">2.1</option><option value="2.2">2.2</option><option value="2.3">2.3</option><option value="2.4">2.4</option><option value="2.5">2.5</option><option value="2.6">2.6</option><option value="2.7">2.7</option><option value="2.8">2.8</option><option value="2.9">2.9</option><option value="3">3.0</option><option value="3.1">3.1</option><option value="3.2">3.2</option><option value="3.3">3.3</option><option value="3.4">3.4</option><option value="3.5">3.5</option><option value="3.6">3.6</option><option value="3.7">3.7</option><option value="3.8">3.8</option><option value="3.9">3.9</option><option value="4">4.0</option><option value="4.1">4.1</option><option value="4.2">4.2</option><option value="4.3">4.3</option><option value="4.4">4.4</option><option value="4.5">4.5</option><option value="4.6">4.6</option><option value="4.7">4.7</option><option value="4.8">4.8</option><option value="4.9">4.9</option><option value="5">5.0</option><option value="5.1">5.1</option><option value="5.2">5.2</option><option value="5.3">5.3</option><option value="5.4">5.4</option><option value="5.5">5.5</option><option value="5.6">5.6</option><option value="5.7">5.7</option><option value="5.8">5.8</option><option value="5.9">5.9</option><option value="6">6.0</option><option value="6.1">6.1</option><option value="6.2">6.2</option><option value="6.3">6.3</option><option value="6.4">6.4</option><option value="6.5">6.5</option><option value="6.6">6.6</option><option value="6.7">6.7</option><option value="6.8">6.8</option><option value="6.9">6.9</option><option value="7">7.0</option><option value="7.1">7.1</option><option value="7.2">7.2</option><option value="7.3">7.3</option><option value="7.4">7.4</option><option value="7.5">7.5</option><option value="7.6">7.6</option><option value="7.7">7.7</option><option value="7.8">7.8</option><option value="7.9">7.9</option><option value="8">8.0</option><option value="8.1">8.1</option><option value="8.2">8.2</option><option value="8.3">8.3</option><option value="8.4">8.4</option><option value="8.5">8.5</option><option value="8.6">8.6</option><option value="8.7">8.7</option><option value="8.8">8.8</option><option value="8.9">8.9</option><option value="9">9.0</option><option value="9.1">9.1</option><option value="9.2">9.2</option><option value="9.3">9.3</option><option value="9.4">9.4</option><option value="9.5">9.5</option><option value="9.6">9.6</option><option value="9.7">9.7</option><option value="9.8">9.8</option><option value="9.9">9.9</option><option value="10">10.0</option><option value="10.1">10.1</option><option value="10.2">10.2</option><option value="10.3">10.3</option><option value="10.4">10.4</option><option value="10.5">10.5</option><option value="10.6">10.6</option><option value="10.7">10.7</option><option value="10.8">10.8</option><option value="10.9">10.9</option><option value="11">11.0</option><option value="11.1">11.1</option><option value="11.2">11.2</option><option value="11.3">11.3</option><option value="11.4">11.4</option><option value="11.5">11.5</option><option value="11.6">11.6</option><option value="11.7">11.7</option><option value="11.8">11.8</option><option value="11.9">11.9</option><option value="12">12.0</option><option value="12.1">12.1</option><option value="12.2">12.2</option><option value="12.3">12.3</option><option value="12.4">12.4</option><option value="12.5">12.5</option><option value="12.6">12.6</option><option value="12.7">12.7</option><option value="12.8">12.8</option><option value="12.9">12.9</option><option value="13">13.0</option><option value="13.1">13.1</option><option value="13.2">13.2</option><option value="13.3">13.3</option><option value="13.4">13.4</option><option value="13.5">13.5</option><option value="13.6">13.6</option><option value="13.7">13.7</option><option value="13.8">13.8</option><option value="13.9">13.9</option><option value="14">14.0</option><option value="14.1">14.1</option><option value="14.2">14.2</option><option value="14.3">14.3</option><option value="14.4">14.4</option><option value="14.5">14.5</option><option value="14.6">14.6</option><option value="14.7">14.7</option><option value="14.8">14.8</option><option value="14.9">14.9</option><option value="15">15.0</option><option value="15.1">15.1</option><option value="15.2">15.2</option><option value="15.3">15.3</option><option value="15.4">15.4</option><option value="15.5">15.5</option><option value="15.6">15.6</option><option value="15.7">15.7</option><option value="15.8">15.8</option><option value="15.9">15.9</option><option value="16">16.0</option><option value="16.1">16.1</option><option value="16.2">16.2</option><option value="16.3">16.3</option><option value="16.4">16.4</option><option value="16.5">16.5</option><option value="16.6">16.6</option><option value="16.7">16.7</option><option value="16.8">16.8</option><option value="16.9">16.9</option><option value="17">17.0</option><option value="17.1">17.1</option><option value="17.2">17.2</option><option value="17.3">17.3</option><option value="17.4">17.4</option><option value="17.5">17.5</option><option value="17.6">17.6</option><option value="17.7">17.7</option><option value="17.8">17.8</option><option value="17.9">17.9</option><option value="18">18.0</option><option value="18.1">18.1</option><option value="18.2">18.2</option><option value="18.3">18.3</option><option value="18.4">18.4</option><option value="18.5">18.5</option><option value="18.6">18.6</option><option value="18.7">18.7</option><option value="18.8">18.8</option><option value="18.9">18.9</option><option value="19">19.0</option><option value="19.1">19.1</option><option value="19.2">19.2</option><option value="19.3">19.3</option><option value="19.4">19.4</option><option value="19.5">19.5</option><option value="19.6">19.6</option><option value="19.7">19.7</option><option value="19.8">19.8</option><option value="19.9">19.9</option><option value="20">20.0</option><option value="20.1">20.1</option><option value="20.2">20.2</option><option value="20.3">20.3</option><option value="20.4">20.4</option><option value="20.5">20.5</option><option value="20.6">20.6</option><option value="20.7">20.7</option><option value="20.8">20.8</option><option value="20.9">20.9</option><option value="21">21.0</option><option value="21.1">21.1</option><option value="21.2">21.2</option><option value="21.3">21.3</option><option value="21.4">21.4</option><option value="21.5">21.5</option><option value="21.6">21.6</option><option value="21.7">21.7</option><option value="21.8">21.8</option><option value="21.9">21.9</option><option value="22">22.0</option><option value="22.1">22.1</option><option value="22.2">22.2</option><option value="22.3">22.3</option><option value="22.4">22.4</option><option value="22.5">22.5</option><option value="22.6">22.6</option><option value="22.7">22.7</option><option value="22.8">22.8</option><option value="22.9">22.9</option><option value="23">23.0</option><option value="23.1">23.1</option><option value="23.2">23.2</option><option value="23.3">23.3</option><option value="23.4">23.4</option><option value="23.5">23.5</option><option value="23.6">23.6</option><option value="23.7">23.7</option><option value="23.8">23.8</option><option value="23.9">23.9</option><option value="24">24.0</option><option value="24.1">24.1</option><option value="24.2">24.2</option><option value="24.3">24.3</option><option value="24.4">24.4</option><option value="24.5">24.5</option><option value="24.6">24.6</option><option value="24.7">24.7</option><option value="24.8">24.8</option><option value="24.9">24.9</option><option value="25">25.0</option><option value="25.1">25.1</option><option value="25.2">25.2</option><option value="25.3">25.3</option><option value="25.4">25.4</option><option value="25.5">25.5</option><option value="25.6">25.6</option><option value="25.7">25.7</option><option value="25.8">25.8</option><option value="25.9">25.9</option><option value="26">26.0</option><option value="26.1">26.1</option><option value="26.2">26.2</option><option value="26.3">26.3</option><option value="26.4">26.4</option><option value="26.5">26.5</option><option value="26.6">26.6</option><option value="26.7">26.7</option><option value="26.8">26.8</option><option value="26.9">26.9</option><option value="27">27.0</option><option value="27.1">27.1</option><option value="27.2">27.2</option><option value="27.3">27.3</option><option value="27.4">27.4</option><option value="27.5">27.5</option><option value="27.6">27.6</option><option value="27.7">27.7</option><option value="27.8">27.8</option><option value="27.9">27.9</option><option value="28">28.0</option><option value="28.1">28.1</option><option value="28.2">28.2</option><option value="28.3">28.3</option><option value="28.4">28.4</option><option value="28.5">28.5</option><option value="28.6">28.6</option><option value="28.7">28.7</option><option value="28.8">28.8</option><option value="28.9">28.9</option><option value="29">29.0</option><option value="29.1">29.1</option><option value="29.2">29.2</option><option value="29.3">29.3</option><option value="29.4">29.4</option><option value="29.5">29.5</option><option value="29.6">29.6</option><option value="29.7">29.7</option><option value="29.8">29.8</option><option value="29.9">29.9</option><option value="30">30.0</option><option value="30.1">30.1</option><option value="30.2">30.2</option><option value="30.3">30.3</option><option value="30.4">30.4</option><option value="30.5">30.5</option><option value="30.6">30.6</option><option value="30.7">30.7</option><option value="30.8">30.8</option><option value="30.9">30.9</option><option value="31">31.0</option><option value="31.1">31.1</option><option value="31.2">31.2</option><option value="31.3">31.3</option><option value="31.4">31.4</option><option value="31.5">31.5</option><option value="31.6">31.6</option><option value="31.7">31.7</option><option value="31.8">31.8</option><option value="31.9">31.9</option><option value="32">32.0</option><option value="32.1">32.1</option><option value="32.2">32.2</option><option value="32.3">32.3</option><option value="32.4">32.4</option><option value="32.5">32.5</option><option value="32.6">32.6</option><option value="32.7">32.7</option><option value="32.8">32.8</option><option value="32.9">32.9</option><option value="33">33.0</option><option value="33.1">33.1</option><option value="33.2">33.2</option><option value="33.3">33.3</option><option value="33.4">33.4</option><option value="33.5">33.5</option><option value="33.6">33.6</option><option value="33.7">33.7</option><option value="33.8">33.8</option><option value="33.9">33.9</option><option value="34">34.0</option><option value="34.1">34.1</option><option value="34.2">34.2</option><option value="34.3">34.3</option><option value="34.4">34.4</option><option value="34.5">34.5</option><option value="34.6">34.6</option><option value="34.7">34.7</option><option value="34.8">34.8</option><option value="34.9">34.9</option><option value="35">35.0</option><option value="35.1">35.1</option><option value="35.2">35.2</option><option value="35.3">35.3</option><option value="35.4">35.4</option><option value="35.5">35.5</option><option value="35.6">35.6</option><option value="35.7">35.7</option><option value="35.8">35.8</option><option value="35.9">35.9</option><option value="36">36.0</option><option value="36.1">36.1</option><option value="36.2">36.2</option><option value="36.3">36.3</option><option value="36.4">36.4</option><option value="36.5">36.5</option><option value="36.6">36.6</option><option value="36.7">36.7</option><option value="36.8">36.8</option><option value="36.9">36.9</option><option value="37">37.0</option><option value="37.1">37.1</option><option value="37.2">37.2</option><option value="37.3">37.3</option><option value="37.4">37.4</option><option value="37.5">37.5</option><option value="37.6">37.6</option><option value="37.7">37.7</option><option value="37.8">37.8</option><option value="37.9">37.9</option><option value="38">38.0</option><option value="38.1">38.1</option><option value="38.2">38.2</option><option value="38.3">38.3</option><option value="38.4">38.4</option><option value="38.5">38.5</option><option value="38.6">38.6</option><option value="38.7">38.7</option><option value="38.8">38.8</option><option value="38.9">38.9</option><option value="39">39.0</option><option value="39.1">39.1</option><option value="39.2">39.2</option><option value="39.3">39.3</option><option value="39.4">39.4</option><option value="39.5">39.5</option><option value="39.6">39.6</option><option value="39.7">39.7</option><option value="39.8">39.8</option><option value="39.9">39.9</option><option value="40">40.0</option><option value="40.1">40.1</option><option value="40.2">40.2</option><option value="40.3">40.3</option><option value="40.4">40.4</option><option value="40.5">40.5</option><option value="40.6">40.6</option><option value="40.7">40.7</option><option value="40.8">40.8</option><option value="40.9">40.9</option><option value="41">41.0</option><option value="41.1">41.1</option><option value="41.2">41.2</option><option value="41.3">41.3</option><option value="41.4">41.4</option><option value="41.5">41.5</option><option value="41.6">41.6</option><option value="41.7">41.7</option><option value="41.8">41.8</option><option value="41.9">41.9</option><option value="42">42.0</option><option value="42.1">42.1</option><option value="42.2">42.2</option><option value="42.3">42.3</option><option value="42.4">42.4</option><option value="42.5">42.5</option><option value="42.6">42.6</option><option value="42.7">42.7</option><option value="42.8">42.8</option><option value="42.9">42.9</option><option value="43">43.0</option><option value="43.1">43.1</option><option value="43.2">43.2</option><option value="43.3">43.3</option><option value="43.4">43.4</option><option value="43.5">43.5</option><option value="43.6">43.6</option><option value="43.7">43.7</option><option value="43.8">43.8</option><option value="43.9">43.9</option><option value="44">44.0</option><option value="44.1">44.1</option><option value="44.2">44.2</option><option value="44.3">44.3</option><option value="44.4">44.4</option><option value="44.5">44.5</option><option value="44.6">44.6</option><option value="44.7">44.7</option><option value="44.8">44.8</option><option value="44.9">44.9</option><option value="45">45.0</option></select></td>
                </tr>
                <tr>
                        <td>Navegação Detalhada</td>
                        <td><input type="hidden" name="navlog" value="0"><input type="checkbox" name="navlog" value="1" checked=""></td>
                </tr>
                <tr>
                        <td>Plano ETOPS</td>
                        <td><input type="hidden" name="etops" value="0"><input type="checkbox" name="etops" value="1"></td>
                </tr>
                <tr>
                        <td>Plano StepClimb</td>
                        <td><input type="hidden" name="stepclimbs" value="0"><input type="checkbox" name="stepclimbs" value="1"></td>
                </tr>
                <tr>
                        <td>Planejamento de RWY</td>
                        <td><input type="hidden" name="tlr" value="0"><input type="checkbox" name="tlr" value="1"></td>
                </tr>
                <tr>
                        <td>NOTAM</td>
                        <td><input type="hidden" name="notams" value="0"><input type="checkbox" name="notams" value="1"></td>
                </tr>
                <tr>
                        <td>FIR NOTAM</td>
                        <td><input type="hidden" name="firnot" value="0"><input type="checkbox" name="firnot" value="1"></td>
                </tr>
        </tbody>
</table>


                                <input type="hidden" name="altn_count" size="5" placeholder="ZZZZ" value="2">
                                <input type="hidden" name="type" size="5" placeholder="ZZZZ" value="<?php
                        
                         $allaircraft = OperationsData::GetAllAircraft(true);
foreach($allaircraft as $aircraft)
                             
			if($aircraft->registration == $schedule->registration)
			{
			echo $aircraft->icao;
                         }
                         ?>">
                                <input type="hidden" name="orig" size="5" placeholder="ZZZZ" maxlength="4" value="<?php echo $schedule->depicao; ?>">
                                <input type="hidden" name="dest" size="5" placeholder="ZZZZ" maxlength="4" value="<?php echo $schedule->arricao; ?>">
                                <input type="hidden" name="callsign" placeholder="ZZZZ" maxlength="4" value="NSV<?php echo $schedule->flightnum; ?>">
                                <input type="hidden" name="cpt" placeholder="ZZZZ" maxlength="4" value="<?php echo Auth::$userinfo->firstname; ?> <?php echo Auth::$userinfo->lastname; ?>">

                                <select style="display:none;" class="form-control" onchange="" name="planformat" id="planformat"><option value="LIDO" selected="">LIDO</option><option value="aal">AAL</option><option value="aca">ACA</option><option value="afr">AFR</option><option value="awe">AWE</option><option value="baw">BAW</option><option value="ber">BER</option><option value="dal">DAL</option><option value="dlh">DLH</option><option value="ezy">EZY</option><option value="gwi">GWI</option><option value="jbu">JBU</option><option value="jza">JZA</option><option value="klm">KLM</option><option value="ryr">RYR</option><option value="swa">SWA</option><option value="uae">UAE</option><option value="ual">UAL</option><option value="ual f:wz">UAL F:WZ</option></select>
                                <select style="display:none;" class="form-control" name="maps"><option value="detail">Detalhado</option><option value="simple">Simples</option><option value="none">None</option></select>
                                
                                
                        <input type="hidden" class="form-control" name="manualrmk" placeholder="Remarks" value="Limites da NorteSul Virutal">

                               <input type="hidden" name="airline" value="NS">
                                <input type="hidden" name="fltnum" value="<?php echo $schedule->flightnum; ?> ">

                                
                                <input type="hidden" name="date" value="<?php echo date('dMy');?>">

                                
                                <?php $deptimes = explode(":", $schedule->deptime); ?>

<input type="hidden" name="deph" value="<?php echo $deptimes[0]?>">
<input type="hidden" name="depm" value="<?php echo $deptimes[1]?>">    



                                <input type="hidden" name="reg" value="<?php echo $schedule->registration; ?>">


                                <input type="hidden" name="navlog" value="1">
                                <input type="hidden" name="selcal" value="EL-SA">
                                <input type="hidden" name="pid" value="000">
                                <input type="hidden" name="cruise" value="CI">
                                <input type="hidden" name="altn_1_route" value="">


                                <div class="box-body"><input type="button" class="btn btn-flat btn-primary" onclick="simbriefsubmit('http://nortesulvirtual.com/crewcenter2pt/index.php/SimBrief');" value="Gerar Briefing da Tripulação">

                                <p><em><strong>Nota: Lembre-se de cadastrar sua conta no <a href="http://www.simbrief.com" title="Cadastre-se no SimBrief">SimBrief</a> antes de utilizar, pois não funcionará sem ela!</strong></em></p>   
    	

                                
                                <a id="<?php echo $schedule->id; ?>" class="addbid" style="color: #00ff00" href="<?php echo SITE_URL;?>/index.php/schedules/addbid"><button type="button" class="btn btn-flat btn-danger">Aceitar</button></a>
                
                <p style="color: #ff0000"><i>Nenhum E-Brief Gerado</i></p>                            
                         </div>
                    </div>
                </div></section>
				<section class="col-lg-4 connected">
                  <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Route Map</h3>
                </div>
                <div class="box-body">

                <div class="mapcenter" align="center">
    <div id="routemap" style="width: 100%; height: 500px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 998; transform: matrix(1, 0, 0, 1, -24, -67);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 30;"><div style="position: absolute; z-index: 998; transform: matrix(1, 0, 0, 1, -24, -67);"><div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 256px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 0px;"><canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; user-select: none; position: absolute; left: 0px; top: 0px;"></canvas></div><div style="width: 256px; height: 256px; position: absolute; left: -256px; top: -256px;"><canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; user-select: none; position: absolute; left: 0px; top: 0px;"></canvas></div><div style="width: 256px; height: 256px; position: absolute; left: 0px; top: -256px;"><canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; user-select: none; position: absolute; left: 0px; top: 0px;"></canvas></div><div style="width: 256px; height: 256px; position: absolute; left: 256px; top: -256px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 256px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -512px; top: 256px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -512px; top: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -512px; top: -256px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 998; transform: matrix(1, 0, 0, 1, -24, -67);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 998; transform: matrix(1, 0, 0, 1, -24, -67);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i2!3i2!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148346!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=68979" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i1!3i2!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148346!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=40378" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i1!3i1!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148346!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=128727" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i2!3i1!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148346!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=26257" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i2!3i3!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148226!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=130668" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i1!3i3!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148226!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=102067" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i3!3i3!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443147926!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=27450" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i0!3i3!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148226!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=73466" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i3!3i2!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148346!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=97580" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i0!3i1!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148346!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=100126" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i0!3i2!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148346!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=11777" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i2!2i3!3i1!4i256!2m3!1e4!2st!3i443!2m3!1e0!2sr!3i443148346!3m12!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!23i1301875&amp;key=AIzaSyAXmTPUtuYWkYSvF_j8TyT1LJH9j2NKwPY&amp;token=54858" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;"><p class="gm-style-pbt">Pressione Ctrl e role a tela simultaneamente para aplicar zoom no mapa</p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"><div style="z-index: -202; cursor: pointer; display: none; touch-action: none;"><div style="width: 30px; height: 27px; overflow: hidden; position: absolute;"><img alt="" src="https://maps.gstatic.com/mapfiles/undo_poly.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 90px; height: 27px;"></div></div></div></div></div></div><iframe aria-hidden="true" frameborder="0" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" src="about:blank"></iframe><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=-22.8089,8.54917&amp;z=2&amp;t=p&amp;hl=pt-BR&amp;gl=US&amp;mapclient=apiv3" title="Clique para ver esta área no Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 27px; top: 160px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Dados do mapa</div><div style="font-size: 13px;">Dados cartográficos ©2018</div><button draggable="false" title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 79px; bottom: 0px; width: 135px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Dados do mapa</a><span>Dados cartográficos ©2018</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dados cartográficos ©2018</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/pt-BR_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Termos de Uso</a></div></div><button draggable="false" title="Ativar a visualização em tela cheia" aria-label="Ativar a visualização em tela cheia" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 11px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 11px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 11px;"></button><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Informar erros no mapa ou nas imagens para o Google" href="https://www.google.com/maps/@-22.8089,8.54917,2z/data=!5m1!1e4!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar erro no mapa</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="153" style="margin: 10px; user-select: none; position: absolute; bottom: 167px; right: 40px;"><div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 72px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" title="Aumentar o zoom" aria-label="Aumentar o zoom" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 9px 11px 13px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 9px 11px 13px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 9px 11px 13px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Diminuir o zoom" aria-label="Diminuir o zoom" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 13px 11px 9px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 13px 11px 9px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; margin: 13px 11px 9px;"></button></div></div><div class="gm-svpc" controlwidth="40" controlheight="40" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 50%; top: 50%;"></div><div style="position: absolute; left: 50%; top: 50%;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2223%22%20height%3D%2238%22%20viewBox%3D%220%200%2023%2038%22%3E%0A%3Cpath%20d%3D%22M16.6%2C38.1h-5.5l-0.2-2.9-0.2%2C2.9h-5.5L5%2C25.3l-0.8%2C2a1.53%2C1.53%2C0%2C0%2C1-1.9.9l-1.2-.4a1.58%2C1.58%2C0%2C0%2C1-1-1.9v-0.1c0.3-.9%2C3.1-11.2%2C3.1-11.2a2.66%2C2.66%2C0%2C0%2C1%2C2.3-2l0.6-.5a6.93%2C6.93%2C0%2C0%2C1%2C4.7-12%2C6.8%2C6.8%2C0%2C0%2C1%2C4.9%2C2%2C7%2C7%2C0%2C0%2C1%2C2%2C4.9%2C6.65%2C6.65%2C0%2C0%2C1-2.2%2C5l0.7%2C0.5a2.78%2C2.78%2C0%2C0%2C1%2C2.4%2C2s2.9%2C11.2%2C2.9%2C11.3a1.53%2C1.53%2C0%2C0%2C1-.9%2C1.9l-1.3.4a1.63%2C1.63%2C0%2C0%2C1-1.9-.9l-0.7-1.8-0.1%2C12.7h0Zm-3.6-2h1.7L14.9%2C20.3l1.9-.3%2C2.4%2C6.3%2C0.3-.1c-0.2-.8-0.8-3.2-2.8-10.9a0.63%2C0.63%2C0%2C0%2C0-.6-0.5h-0.6l-1.1-.9h-1.9l-0.3-2a4.83%2C4.83%2C0%2C0%2C0%2C3.5-4.7A4.78%2C4.78%200%200%2C0%2011%202.3H10.8a4.9%2C4.9%2C0%2C0%2C0-1.4%2C9.6l-0.3%2C2h-1.9l-1%2C.9h-0.6a0.74%2C0.74%2C0%2C0%2C0-.6.5c-2%2C7.5-2.7%2C10-3%2C10.9l0.3%2C0.1%2C2.5-6.3%2C1.9%2C0.3%2C0.2%2C15.8h1.6l0.6-8.4a1.52%2C1.52%2C0%2C0%2C1%2C1.5-1.4%2C1.5%2C1.5%2C0%2C0%2C1%2C1.5%2C1.4l0.9%2C8.4h0Zm-10.9-9.6h0Zm17.5-.1h0Z%22%20style%3D%22fill%3A%23333%3Bopacity%3A0.7%3Bisolation%3Aisolate%22%2F%3E%0A%3Cpath%20d%3D%22M5.9%2C13.6l1.1-.9h7.8l1.2%2C0.9%22%20style%3D%22fill%3A%23ce592c%22%2F%3E%0A%3Cellipse%20cx%3D%2210.9%22%20cy%3D%2213.1%22%20rx%3D%222.7%22%20ry%3D%220.3%22%20style%3D%22fill%3A%23ce592c%3Bopacity%3A0.5%3Bisolation%3Aisolate%22%2F%3E%0A%3Cpath%20d%3D%22M20.6%2C26.1l-2.9-11.3a1.71%2C1.71%2C0%2C0%2C0-1.6-1.2H5.7a1.69%2C1.69%2C0%2C0%2C0-1.5%2C1.3l-3.1%2C11.3a0.61%2C0.61%2C0%2C0%2C0%2C.3.7l1.1%2C0.4a0.61%2C0.61%2C0%2C0%2C0%2C.7-0.3l2.7-6.7%2C0.2%2C16.8h3.6l0.6-9.3a0.47%2C0.47%2C0%2C0%2C1%2C.44-0.5h0.06c0.4%2C0%2C.4.2%2C0.5%2C0.5l0.6%2C9.3h3.6L15.7%2C20.3l2.5%2C6.6a0.52%2C0.52%2C0%2C0%2C0%2C.66.31h0l1.2-.4a0.57%2C0.57%2C0%2C0%2C0%2C.5-0.7h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%2F%3E%0A%3Cpath%20d%3D%22M7%2C13.6l3.9%2C6.7%2C3.9-6.7%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%2F%3E%0A%3Ccircle%20cx%3D%2210.9%22%20cy%3D%227%22%20r%3D%225.9%22%20style%3D%22fill%3A%23fdbf2d%22%2F%3E%0A%3C%2Fsvg%3E%0A" aria-label="Controle do Pegman no Street View" style="width: 18px; height: 30px; position: absolute; left: -9px; top: -15px; pointer-events: none;"><img src="data:image/svg+xml,%3Csvg%20width%3D%2224px%22%20height%3D%2238px%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20viewBox%3D%220%200%2024%2038%22%3E%0A%3Cpath%20d%3D%22M22%2C26.6l-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L6.6%2C21l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Z%22%20style%3D%22fill%3A%23333%3Bfill-opacity%3A0.2%22%2F%3E%22%0A%3C%2Fsvg%3E%0A%0A" aria-label="O Pegman está sobre o mapa" style="display: none; width: 18px; height: 30px; position: absolute; left: -9px; top: -15px; pointer-events: none;"><img src="data:image/svg+xml,%3Csvg%20width%3D%2240px%22%20height%3D%2250px%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20viewBox%3D%220%200%2040%2050%22%3E%0A%3Cpath%20d%3D%22M34.00%2C-30.40l-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L18.60%2C-36.00l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Zm1.2%2C59.1-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L18.60%2C24.00l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Z%22%20style%3D%22fill%3A%23333%3Bfill-opacity%3A0.2%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M15.40%2C38.80h-4a1.64%2C1.64%2C0%2C0%2C1-1.4-1.1l-3.1-8a0.9%2C0.9%2C0%2C0%2C1-.5.1l-1.4.1a1.62%2C1.62%2C0%2C0%2C1-1.6-1.4l-1.1-13.1%2C1.6-1.3a6.87%2C6.87%2C0%2C0%2C1-3-4.6A7.14%2C7.14%200%200%2C1%202%204a7.6%2C7.6%2C0%2C0%2C1%2C4.7-3.1%2C7.14%2C7.14%2C0%2C0%2C1%2C5.5%2C1.1%2C7.28%2C7.28%2C0%2C0%2C1%2C2.3%2C9.6l2.1-.1%2C0.1%2C1c0%2C0.2.1%2C0.5%2C0.1%2C0.8a2.41%2C2.41%2C0%2C0%2C1%2C1%2C1s1.9%2C3.2%2C2.8%2C4.9c0.7%2C1.2%2C2.1%2C4.2%2C2.8%2C5.9a2.1%2C2.1%2C0%2C0%2C1-.8%2C2.6l-0.6.4a1.63%2C1.63%2C0%2C0%2C1-1.5.2l-0.6-.3a8.93%2C8.93%2C0%2C0%2C0%2C.5%2C1.3%2C7.91%2C7.91%2C0%2C0%2C0%2C1.8%2C2.6l0.6%2C0.3v4.6l-4.5-.1a7.32%2C7.32%2C0%2C0%2C1-2.5-1.5l-0.4%2C3.6h0Zm-10-19.2%2C3.5%2C9.8%2C2.9%2C7.5h1.6V35l-1.9-9.4%2C3.1%2C5.4a8.24%2C8.24%2C0%2C0%2C0%2C3.8%2C3.8h2.1v-1.4a14%2C14%2C0%2C0%2C1-2.2-3.1%2C44.55%2C44.55%2C0%2C0%2C1-2.2-8l-1.3-6.3%2C3.2%2C5.6c0.6%2C1.1%2C2.1%2C3.6%2C2.8%2C4.9l0.6-.4c-0.8-1.6-2.1-4.6-2.8-5.8-0.9-1.7-2.8-4.9-2.8-4.9a0.54%2C0.54%2C0%2C0%2C0-.4-0.3l-0.7-.1-0.1-.7a4.33%2C4.33%2C0%2C0%2C0-.1-0.5l-5.3.3%2C2.2-1.9a4.3%2C4.3%2C0%2C0%2C0%2C.9-1%2C5.17%2C5.17%2C0%2C0%2C0%2C.8-4%2C5.67%2C5.67%2C0%2C0%2C0-2.2-3.4%2C5.09%2C5.09%2C0%2C0%2C0-4-.8%2C5.67%2C5.67%2C0%2C0%2C0-3.4%2C2.2%2C5.17%2C5.17%2C0%2C0%2C0-.8%2C4%2C5.67%2C5.67%2C0%2C0%2C0%2C2.2%2C3.4%2C3.13%2C3.13%2C0%2C0%2C0%2C1%2C.5l1.6%2C0.6-3.2%2C2.6%2C1%2C11.5h0.4l-0.3-8.2h0Z%22%20style%3D%22fill%3A%23333%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M3.35%2C15.90l1.1%2C12.5a0.39%2C0.39%2C0%2C0%2C0%2C.36.42l0.14%2C0%2C1.4-.1a0.66%2C0.66%2C0%2C0%2C0%2C.5-0.4l-0.2-3.8-3.3-8.6h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M5.20%2C28.80l1.1-.1a0.66%2C0.66%2C0%2C0%2C0%2C.5-0.4l-0.2-3.8-1.2-3.1Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M21.40%2C35.70l-3.8-1.2-2.7-7.8L12.00%2C15.5l3.4-2.9c0.2%2C2.4%2C2.2%2C14.1%2C3.7%2C17.1%2C0%2C0%2C1.3%2C2.6%2C2.3%2C3.1v2.9m-8.4-8.1-2-.3%2C2.5%2C10.1%2C0.9%2C0.4v-2.9%22%20style%3D%22fill%3A%23e5892b%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M17.80%2C25.40c-0.4-1.5-.7-3.1-1.1-4.8-0.1-.4-0.1-0.7-0.2-1.1l-1.1-2-1.7-1.6s0.9%2C5%2C2.4%2C7.1a19.12%2C19.12%2C0%2C0%2C0%2C1.7%2C2.4h0Z%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M14.40%2C37.80h-3a0.43%2C0.43%2C0%2C0%2C1-.4-0.4l-3-7.8-1.7-4.8-3-9%2C8.9-.4s2.9%2C11.3%2C4.3%2C14.4c1.9%2C4.1%2C3.1%2C4.7%2C5%2C5.8h-3.2s-4.1-1.2-5.9-7.7a0.59%2C0.59%2C0%2C0%2C0-.6-0.4%2C0.62%2C0.62%2C0%2C0%2C0-.3.7s0.5%2C2.4.9%2C3.6a34.87%2C34.87%2C0%2C0%2C0%2C2%2C6h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M15.40%2C12.70l-3.3%2C2.9-8.9.4%2C3.3-2.7%22%20style%3D%22fill%3A%23ce592b%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M9.10%2C21.10l1.4-6.2-5.9.5%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M12.00%2C13.5a4.75%2C4.75%2C0%2C0%2C1-2.6%2C1.1c-1.5.3-2.9%2C0.2-2.9%2C0s1.1-.6%2C2.7-1%22%20style%3D%22fill%3A%23bb3d19%22%3E%3C%2Fpath%3E%0A%3Ccircle%20cx%3D%227.92%22%20cy%3D%228.19%22%20r%3D%226.3%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fcircle%3E%0A%3Cpath%20d%3D%22M4.70%2C13.60a6.21%2C6.21%2C0%2C0%2C0%2C8.4-1.9v-0.1a8.89%2C8.89%2C0%2C0%2C1-8.4%2C2h0Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M21.20%2C27.20l0.6-.4a1.09%2C1.09%2C0%2C0%2C0%2C.4-1.3c-0.7-1.5-2.1-4.6-2.8-5.8-0.9-1.7-2.8-4.9-2.8-4.9a1.6%2C1.6%2C0%2C0%2C0-2.17-.65l-0.23.15a1.68%2C1.68%2C0%2C0%2C0-.4%2C2.1s2.3%2C3.9%2C3.1%2C5.3c0.6%2C1%2C2.1%2C3.7%2C2.9%2C5.1a0.94%2C0.94%2C0%2C0%2C0%2C1.24.49l0.16-.09h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M19.40%2C19.80c-0.9-1.7-2.8-4.9-2.8-4.9a1.6%2C1.6%2C0%2C0%2C0-2.17-.65l-0.23.15-0.3.3c1.1%2C1.5%2C2.9%2C3.8%2C3.9%2C5.4%2C1.1%2C1.8%2C2.9%2C5%2C3.8%2C6.7l0.1-.1a1.09%2C1.09%2C0%2C0%2C0%2C.4-1.3%2C57.67%2C57.67%2C0%2C0%2C0-2.7-5.6h0Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3C%2Fsvg%3E%0A" aria-label="Controle do Pegman no Street View" style="display: none; width: 32px; height: 40px; position: absolute; left: -18px; top: -18px; pointer-events: none;"></div></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 26px; left: 0px;"><div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;"><div style="width: 40px; height: 40px;"><button draggable="false" title="Rotate map 90 degrees" aria-label="Rotate map 90 degrees" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 28px; width: 28px; margin: 6px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 28px; width: 28px; margin: 6px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 28px; width: 28px; margin: 6px;"></button><button draggable="false" title="Tilt map" aria-label="Tilt map" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px; height: 16px; margin: 12px 11px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px; height: 16px; margin: 12px 11px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px; height: 16px; margin: 12px 11px;"></button></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="Mostrar mapa de ruas" aria-label="Mostrar mapa de ruas" aria-pressed="true" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; height: 40px; display: table-cell; vertical-align: middle; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 0px 23px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 46px; font-weight: 500;">Mapa</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 40px; text-align: left; display: none;"><div draggable="false" title="Mostrar mapa de ruas com relevo" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 8px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Relevo</label></div></div></div><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="Mostrar imagens de satélite" aria-label="Mostrar imagens de satélite" aria-pressed="false" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; height: 40px; display: table-cell; vertical-align: middle; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 0px 23px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 62px; border-left: 0px;">Satélite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 40px; text-align: left; display: none;"><div draggable="false" title="Mostrar imagens com nomes de rua" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 8px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Marcadores</label></div></div></div></div></div></div></div>
</div>
<?php
$airports = OperationsData::GetAllAirports(true);
foreach($airports as $airport)
                             
			if($airport->icao == $schedule->depicao)
			{
			 $deplat = $airport->lat;
			 $deplng = $airport->lng;
                         
                         }
						 foreach($airports as $airport2)
if($airport2->icao == $schedule->arricao)
			{
			 $arrlat = $airport2->lat;
			 $arrlng = $airport2->lng;
                         
                         }
						?>			
<script type="text/html" id="navpoint_bubble">
    <span style="font-size: 10px; text-align:left; width: 100%" align="left">
    <strong>Name: </strong><%=nav.title%> (<%=nav.name%>)<br />
    <strong>Type: </strong>
        <% if(nav.type == 2) { %> NDB <% } %>
    <% if(nav.type == 3) { %> VOR <% } %>
    <% if(nav.type == 4) { %> DME <% } %>
    <% if(nav.type == 5) { %> FIX <% } %>
    <% if(nav.type == 6) { %> TRACK <% } %>
    <br />
        <% if(nav.freq != 0) { %>
    <strong>Frequency: </strong><%=nav.freq%>
    <% } %>
    </span>
</script>


  <script type="text/javascript">
      // This example adds an animated symbol to a polyline.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('routemap'), {
          center: {lat: <?php echo $deplat;?>, lng: <?php echo $arrlng;?>},
          autozoom: true,
          zoom: 4,
          mapTypeId: 'terrain'
        });

        // Define the symbol, using one of the predefined paths ('CIRCLE')
        // supplied by the Google Maps JavaScript API.

        var lineSymbol = {
          path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
          scale: 4,
          strokeColor: '#005091'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line = new google.maps.Polyline({
          path: [{lat: <?php echo $deplat;?>, lng: <?php echo $deplng;?>}, {lat: <?php echo $arrlat;?>, lng: <?php echo $arrlng;?>}],
          icons: [{
            icon: lineSymbol,
            offset: '100%'
          }],
          map: map
        });

        animateCircle(line);
      }

      // Use the DOM setInterval() function to change the offset of the symbol
      // at fixed intervals.
      function animateCircle(line) {
          var count = 0;
          window.setInterval(function() {
            count = (count + 1) % 200;

            var icons = line.get('icons');
            icons[0].offset = (count / 2) + '%';
            line.set('icons', icons);
        }, 20);
      }

var options = {
    mapTypeId: google.maps.MapTypeId.ROADMAP
}

var map = new google.maps.Map(document.getElementById("routemap"), options);
var dep_location = new google.maps.LatLng(<?php echo $deplat;?>,<?php echo $deplng;?>);
var arr_location = new google.maps.LatLng(<?php echo $arrlat;?>,<?php echo $arrlng;?>);

var bounds = new google.maps.LatLngBounds();
bounds.extend(dep_location);
bounds.extend(arr_location);

var depMarker = new google.maps.Marker({
    position: dep_location,
    map: map,
    icon: "<?php echo SITE_URL;?>/lib/images/icon.png",
    title: "<?php echo $depicao;?>"
});
var arrMarker = new google.maps.Marker({
    position: arr_location,
    map: map,
    icon: "<?php echo SITE_URL;?>/lib/images/icon.png",
    title: "<?php echo $arricao;?>"
});

var flightPath = new google.maps.Polyline({
    path: [dep_location,  arr_location],
    strokeColor: "#000000", strokeOpacity: 1.0, strokeWeight: 2
}).setMap(map);

// Resize the view to fit it all in
map.fitBounds(bounds);
map.panToBounds(bounds);
google.maps.event.addDomListener(window, "load", initMap);
</script>
               </div>
            </div>
         </section>
          </div>
          <!-- /.modal-dialog -->	
    </section>
    <!-- /.content -->