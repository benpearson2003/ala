@extends('layouts.admin')

@section('title', 'Audit Reports')

@section('search')
@endsection

@section('content')
    <style>
    th {
        color: #FFF;
        background: #A52C01;
    }
    tr, th {
        padding: 4px;
    }
    .button {
        text-decoration: none;
        font-weight: normal;
        display: inline-block;
        padding: 4px 7px;
        text-align: center;
        line-height: 1.4;
        background: none repeat scroll 0 0 #4CA0BA;
        border: 1px solid #FFFFFF;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 1px 1px 2px #7a7a7a;
        color: #FFFFFF;
        font-family: 'Ubuntu',Lucida Sans,Sans-Serif;
        font-size: 13px;
        min-width: 56px;
        margin-bottom: 5px;
    }
    </style>
    <div class="content">
        <h2 class="pagename">Audit Reports</h2>
        <span id="ctl00_mainContent_msg" style="color: Red;"></span>
        <a id="ctl00_mainContent_displayFormView_MultipleButton" class="button" href={{ route('mgt/uploadAudit')}}>Upload Audits</a>
        <div class="" id="ctl00_mainContent_pnlSearch">
            <div class="col-md-12">
                <table style="border:1px solid #000000;" cellspacing="0" cellpadding="2" border="0">
                    <tbody>
                        <tr>
                            <td colspan="2" style="background-color:#C0C0C0;"><b>Search</b></td>
                        </tr>
                        <tr>
                            <td align="right">Audit ID:</td>
                            <td>
                                <input name="ctl00$mainContent$tbSearchID" maxlength="10" size="10" id="ctl00_mainContent_tbSearchID" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Name:</td>
                            <td>
                                <input name="ctl00$mainContent$tbSearchName" maxlength="100" size="30" id="ctl00_mainContent_tbSearchName" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">County:</td>
                            <td>
                                <select name="ctl00$mainContent$ddlSearchCounty" id="ctl00_mainContent_ddlSearchCounty">
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
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Year:</td>
                            <td>
                                <input name="ctl00$mainContent$tbSearchYear" maxlength="4" size="4" id="ctl00_mainContent_tbSearchYear" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input name="ctl00$mainContent$btnSearch" value="Search" id="ctl00_mainContent_btnSearch" type="submit">
                                <input name="ctl00$mainContent$btnClear" value="Clear Search" id="ctl00_mainContent_btnClear" type="submit">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="">
            <div class="col-md-12">
                <table class="table" id="ctl00_mainContent_displayGridView" style="border-collapse:collapse;" cellspacing="0" border="0">
                    <tbody>
                        <tr class="header ">
                            <th scope="col">Audit ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Featured?</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                        <tr class="" id="280467">
                            <td>EDSC01117</td>
                            <td>Arkansas River Educational Service Cooperative</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl02_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl02$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl02_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl02$LinkButton4','')">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr class="" id="280465">
                			<td>IRSD02617</td>
                            <td>Bergman School District Athletic Booster Club</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl03_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl03$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl03_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl03$LinkButton4','')">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr class="" id="280464">
                			<td>IROA02615</td>
                            <td>West River Valley RSWMD - Green Source Recycling</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
                				    <a id="ctl00_mainContent_displayGridView_ctl04_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl04$LinkButton1','')">Edit</a>
                				    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl04_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl04$LinkButton4','')">Delete</a>
                                </div>
                			</td>
                        </tr>
                        <tr class="" id="280463">
                			<td>EDSD22517</td>
                            <td>Paris School District</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
                				    <a id="ctl00_mainContent_displayGridView_ctl05_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl05$LinkButton1','')">Edit</a>
                				    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl05_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl05$LinkButton4','')">Delete</a>
                                </div>
                			</td>
                		</tr>
                        <tr class="" id="280462">
                			<td>EDSD24517</td>
                            <td>Fouke School District</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
                				    <a id="ctl00_mainContent_displayGridView_ctl06_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl06$LinkButton1','')">Edit</a>
                				    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl06_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl06$LinkButton4','')">Delete</a>
                                </div>
                			</td>
                		</tr>
                        <tr class="" id="280461">
                            <td>EDSD23817</td>
                            <td>Flippin School District</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl07_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl07$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl07_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl07$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                        </tr>
                        <tr class="" id="280460">
                            <td>EDSD23217</td><td>Lonoke School District</td><td style="width:5%;">False</td><td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl08_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl08$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl08_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl08$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                        </tr>
                        <tr class="" id="280459">
                			<td>EDSD22817</td>
                            <td>Cabot School District</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl09_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl09$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl09_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl09$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr>
                        <tr class="" id="280458">
                			<td>EDSD22317</td>
                            <td>Booneville School District</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl10_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl10$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl10_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl10$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr>
                        <tr class="" id="280457">
                			<td>EDSD21717</td>
                            <td>Star City School District</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl11_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl11$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl11_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl11$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr><tr class="" id="280456">
                			<td>EDSD20917</td>
                            <td>Sloan Hendrix School District</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl12_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl12$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl12_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl12$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr><tr class="" id="280455">
                			<td>EDSD20017</td>
                            <td>Westside School District (johnson)</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl13_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl13$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl13_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl13$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr><tr class="" id="280454">
                			<td>EDSD19817</td>
                            <td>Lamar School District</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl14_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl14$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl14_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl14$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr><tr class="" id="280453">
                			<td>EDSD19717</td>
                            <td>Clarksville School District</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl15_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl15$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl15_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl15$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr>
                        <tr class="" id="280452">
                			<td>LOM109416</td>
                            <td>West Memphis</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl16_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl16$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl16_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl16$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr>
                        <tr class="" id="280451">
                			<td>LOM107216</td>
                            <td>Paragould</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl17_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl17$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl17_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl17$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr>
                        <tr class="" id="280450">
                			<td>LOM106416</td>
                            <td>Monticello</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl18_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl18$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl18_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl18$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr>
                        <tr class="" id="280449">
                			<td>LOM103916</td>
                            <td>Greenwood</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl19_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl19$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl19_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl19$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr>
                        <tr class="" id="280448">
                			<td>LOM102716</td>
                            <td>Dewitt</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl20_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl20$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl20_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl20$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr>
                        <tr class="" id="280447">
                			<td>LOM104216</td>
                            <td>Harrison</td>
                            <td style="width:5%;">False</td>
                            <td class="text-right-now">
                                <div class="item">
            					    <a id="ctl00_mainContent_displayGridView_ctl21_LinkButton1" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl21$LinkButton1','')">Edit</a>
            					    <a onclick="return confirm('Are you sure you want to delete this record?');" id="ctl00_mainContent_displayGridView_ctl21_LinkButton4" class="button" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl21$LinkButton4','')">Delete</a>
                                </div>
            				</td>
                		</tr>
                    </tbody>
                </table>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" id="ctl00_mainContent_displayGridView_ctl23_lnkFirst" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$lnkFirst','')">First</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$ctl01','')">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$ctl04','')">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$ctl07','')">3</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$ctl10','')">4</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$ctl13','')">5</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$ctl16','')">6</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$ctl19','')">7</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$ctl22','')">8</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$ctl25','')">9</a>
                    </li>
                    <li class="page-item"><a class="page-link" id="ctl00_mainContent_displayGridView_ctl23_lnkLast" href="javascript:__doPostBack('ctl00$mainContent$displayGridView$ctl23$lnkLast','')">Last</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
