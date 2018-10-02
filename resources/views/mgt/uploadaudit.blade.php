@extends('layouts.admin')

@section('title', 'Manage Content')

@section('search')
@endsection

@section('content')
    <form action={{ route('mgt/uploadAudit')}} method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" id="files" name="file[]" value="Upload Audits" multiple/>
        <div id="selectedFiles"></div>
        <input type="submit" value=" Save " />
    </form>
    <table class="gridview" id="ctl00_mainContent_gvAuditFiles" style="border-collapse:collapse;" cellspacing="0" border="0">
		<tbody><tr class="header row">
			<th scope="col">&nbsp;</th><th scope="col">Audit ID</th><th scope="col" align="left">Auditee/County/Type</th><th scope="col">Dates</th><th scope="col">Meeting(s)</th><th scope="col">Flags</th>
		</tr><tr class="row">
			<td>
                   <input name="" value="Edit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$mainContent$gvAuditFiles$ctl02$ctl00&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" type="submit">
                   <input name="" value="Delete" onclick="return confirm('Delete this item?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$mainContent$gvAuditFiles$ctl02$ctl01&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" type="submit">
                </td><td>
                    <a href="/AuditReports//20df/audit.pdf" target="_blank">
                    audit</a>
                </td><td>
                    <b>Auditee:</b> <br>
                    <b>County:</b> <br>
                    <b>Type:</b>
                </td><td>
                    <b>Year(s):</b> 20df<br>
                    <b>Fiscal:</b>
                </td><td>
                    <input name="" id="" type="hidden">
                </td><td>
                    <b>Deferred:</b> False<br>
                    <b>Early:</b> False
                    <div>
                        <b>Early Date:</b> 1/1/1900 12:00:00 AM
			</div>
                </td>
		</tr>
	</tbody></table>
    <table class="gridview" id="" style="border-collapse:collapse;" cellspacing="0" border="0">
		<tbody><tr class="header row">
			<th scope="col">&nbsp;</th><th scope="col">Audit ID</th><th scope="col" align="left">Auditee/County/Type</th><th scope="col">Dates</th><th scope="col">Meeting(s)</th><th scope="col">Flags</th>
		</tr><tr class="edit form row">
			<td>
                   <input name="" value="Save" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$mainContent$gvAuditFiles$ctl02$ctl00&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" type="submit">
                   <input name="" value="Cancel" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$mainContent$gvAuditFiles$ctl02$ctl01&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" type="submit">
                </td><td>
                    <a href="/AuditReports//20)./audit(2).pdf" target="_blank">
                    audit(2)</a>
                </td><td>
                    Name:<br>
                    <input name="" maxlength="200" size="70" id="" type="text">
                    <br>
                    County:<br>
                    <select name="" id="">
				<option selected="selected" value="">-Select a County-</option>
				<option value="State Wide">State Wide</option>
				<option value="Arkansas County">Arkansas</option>
				<option value="Ashley County">Ashley</option>
				<option value="Baxter County">Baxter</option>
				<option value="Benton County">Benton</option>
				<option value="Boone County">Boone</option>
				<option value="Bradley County">Bradley</option>
				<option value="Calhoun County">Calhoun</option>
				<option value="Carroll County">Carroll</option>
				<option value="Chicot County">Chicot</option>
				<option value="Clark County">Clark</option>
				<option value="Clay County">Clay</option>
				<option value="Cleburne County">Cleburne</option>
				<option value="Cleveland County">Cleveland</option>
				<option value="Columbia County">Columbia</option>
				<option value="Conway County">Conway</option>
				<option value="Craighead County">Craighead</option>
				<option value="Crawford County">Crawford</option>
				<option value="Crittenden County">Crittenden</option>
				<option value="Cross County">Cross</option>
				<option value="Dallas County">Dallas</option>
				<option value="Desha County">Desha</option>
				<option value="Drew County">Drew</option>
				<option value="Faulkner County">Faulkner</option>
				<option value="Franklin County">Franklin</option>
				<option value="Fulton County">Fulton</option>
				<option value="Garland County">Garland</option>
				<option value="Grant County">Grant</option>
				<option value="Greene County">Greene</option>
				<option value="Hempstead County">Hempstead</option>
				<option value="Hot Spring County">Hot Spring</option>
				<option value="Howard County">Howard</option>
				<option value="Independence County">Independence</option>
				<option value="Izard County">Izard</option>
				<option value="Jackson County">Jackson</option>
				<option value="Jefferson County">Jefferson</option>
				<option value="Johnson County">Johnson</option>
				<option value="Lafayette County">Lafayette</option>
				<option value="Lawrence County">Lawrence</option>
				<option value="Lee County">Lee</option>
				<option value="Lincoln County">Lincoln</option>
				<option value="Little River County">Little River</option>
				<option value="Logan County">Logan</option>
				<option value="Lonoke County">Lonoke</option>
				<option value="Madison County">Madison</option>
				<option value="Marion County">Marion</option>
				<option value="Miller County">Miller</option>
				<option value="Mississippi County">Mississippi</option>
				<option value="Monroe County">Monroe</option>
				<option value="Montgomery County">Montgomery</option>
				<option value="Nevada County">Nevada</option>
				<option value="Newton County">Newton</option>
				<option value="Ouachita County">Ouachita</option>
				<option value="Perry County">Perry</option>
				<option value="Phillips County">Phillips</option>
				<option value="Pike County">Pike</option>
				<option value="Poinsett County">Poinsett</option>
				<option value="Polk County">Polk</option>
				<option value="Pope County">Pope</option>
				<option value="Prairie County">Prairie</option>
				<option value="Pulaski County">Pulaski</option>
				<option value="Randolph County">Randolph</option>
				<option value="St. Francis County">St. Francis</option>
				<option value="Saline County">Saline</option>
				<option value="Scott County">Scott</option>
				<option value="Searcy County">Searcy</option>
				<option value="Sebastian County">Sebastian</option>
				<option value="Sevier County">Sevier</option>
				<option value="Sharp County">Sharp</option>
				<option value="Stone County">Stone</option>
				<option value="Union County">Union</option>
				<option value="Van Buren County">Van Buren</option>
				<option value="Washington County">Washington</option>
				<option value="White County">White</option>
				<option value="Woodruff County">Woodruff</option>
				<option value="Yell County">Yell</option>

			</select>
                    <br>
                    Type:<br>
                    <select name="" id="">
				<option value="">-Select a Type-</option>
				<option value="CI">Cities</option>
				<option value="CO">Counties</option>
				<option value="ED">Education</option>
				<option value="HE">Higher Education</option>
				<option value="IS">Information Systems</option>
				<option value="IR">Investigative Reports</option>
				<option value="LO">Local</option>
				<option value="OT">Other</option>
				<option value="PE">Performance Audits</option>
				<option value="PA">Prosecuting Attorneys</option>
				<option value="PS">Public Schools</option>
				<option value="SW">Solid Waste Districts</option>
				<option value="SP">Special Projects</option>
				<option value="SR">Special Reports</option>
				<option value="SA">State Agencies</option>
				<option value="CA">State Wide</option>
				<option value="WS">Water &amp; Sewer</option>

			</select>
                    <input name="" id="" type="hidden">

                </td><td>
                    Year(s):<br>
                    <input name="" id="" value="20)." type="hidden">
                    <select size="6" name="" multiple="multiple" id="">
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
				<option value="2010">2010</option>
				<option value="2009">2009</option>
				<option value="2008">2008</option>
				<option value="2007">2007</option>
				<option value="2006">2006</option>
				<option value="2005">2005</option>
				<option value="2004">2004</option>
				<option value="2003">2003</option>
				<option value="2002">2002</option>
				<option value="2001">2001</option>
				<option value="2000">2000</option>
				<option value="1999">1999</option>
				<option value="1998">1998</option>
				<option value="1997">1997</option>

			</select>

                    <br>
                    Fiscal Date:<br>
                    <select name="" id="">
				<option selected="selected" value="">None</option>
				<option value="12/31">December 31</option>
				<option value="6/30">June 30</option>
				<option value="7/12">July 12</option>

			</select>

                </td><td>
                    <input name="" id="" value="audit(2)" type="hidden">
                    <input name="" id="" type="hidden">
                    <select size="6" name="" multiple="multiple" id="">
				<option selected="selected" value="">--NONE--</option>

			</select>
                    <span id="ctl00_mainContent_gvAuditFiles_ctl02_ctl02" class="error" style="color:Transparent;display:none;"><br>Please choose at least one meeting.</span>

                </td><td>
                    <input id="" name="" type="checkbox"><label for="ctl00_mainContent_gvAuditFiles_ctl02_chkDeferred">Deferred?</label><br>
                    <input id="" name="" onclick="javascript:setTimeout('__doPostBack(\'ctl00$mainContent$gvAuditFiles$ctl02$chkEarly\',\'\')', 0)" type="checkbox"><label for="ctl00_mainContent_gvAuditFiles_ctl02_chkEarly">Early?</label><br>
                    Early Date: <input name="" value="1/1/1900" maxlength="10" size="10" id="" disabled="disabled" class="txtDate" type="text">
                    <span id="" style="color:Red;display:none;">Invalid date</span>

                    <span id="" class="error" style="color:Transparent;display:none;"><br>Early Date is required if Early flag is checked.</span>
                    <br>
                    Early Time: <input name="" value="12:00 AM" maxlength="8" size="8" id="" disabled="disabled" class="ui-timepicker-input" autocomplete="off" type="text">
                    <script>
                        $(function () {
                            $('#').timepicker();
                        });
                    </script>
                    <span id="" style="color:Red;display:none;">Invalid time format (HH:MM AM)</span>
                    <span id="" class="error" style="color:Transparent;display:none;"><br>Early Time is required if Early flag is checked.</span>
                </td>
		</tr>
	</tbody></table>
    <script>
        var selDiv = "";

        document.addEventListener("DOMContentLoaded", init, false);

        function init() {
            document.querySelector('#files').addEventListener('change', handleFileSelect, false);
            selDiv = document.querySelector("#selectedFiles");
        }

        function handleFileSelect(e) {

            if(!e.target.files) return;

            selDiv.innerHTML = "";

            var files = e.target.files;
            for(var i=0; i<files.length; i++) {
                var f = files[i];

                selDiv.innerHTML +=
                '<div class="row">' +
                    '<div class="col-md-1">' +
                        f.name +
                    '</div>' +
                    '<div class="col-md-1">' +
                        ' <input tabindex="' + i + '" value="Remove" class="removeButton" name="RowRemove" type="button"> <br/>' +
                    '</div>' +
                '</div>';

            }

        }
    </script>
    <style>
        .removeButton {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;
            padding-left: 10px;
            background-image: url({{ asset('/images/delete.png') }});
            background-position: 0px -70px;
            color: #000;
        }
    </style>
@endsection
