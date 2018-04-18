@extends('layouts.app')

@section('title', 'Home')

@section('slider')
    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src={{ asset('/images/carousel0.jpg') }} />
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="mainpageContent">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidenavcontainer">
                        <h4>In This Section:</h4>
                        <ul>
                            <li class="">
                                <a href="/about-us/staff/default.aspx">Staff</a>
                            </li>
                            <li class="">
                                <a href="/about-us/professional-oversight/default.aspx">Professional Oversight</a>
                            </li>
                            <li class="">
                                <a href="/!userfiles/editor/docs/Resources/LJAC Handbook.pdf">LJAC Handbook</a>
                            </li>
                            <li class="">
                                <a href="/about-us/privacy-policy/default.aspx">Privacy Policy</a>
                            </li>
                            <li class="current">
                                <a href="/about-us/employment-opportunities/default.aspx">Employment Opportunities</a>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <a class="intleftpromo" href="/about-us/professional-oversight/">
                    <img src="/!userfiles/images/ADLA_2014_int_promo_AICPA.png" alt="Our Quality Commitment" class="img-responsive">
                    </a>
                    <a class="intleftpromo" href="https://www.fbi.gov/investigate/public-corruption" target="_blank">
                    <img src="/!userfiles/images/ADLA_2014_int_promo_report.png" alt="Report Corruption" class="img-responsive">
                    </a>
                    <a class="intleftpromo" href="http://transparency.arkansas.gov" target="_blank">
                    <img src="/!userfiles/images/ADLA_2014_int_promo_transparency.png" alt="Arkansas Transparency Site" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-9">
                        <h1 class="page-title">Employment Opportunities</h1>
                        <div class="contentModule">
                            <span style="font-size: 20px;">Applicants for auditor positions are required to be college graduates with accounting degrees, or an accounting equivalency, meeting the requirements for the Certified Public Accountant (CPA) examination.&nbsp; Applicants for certain positions in the Information System section are required to be college graduates with Management Information Systems or related degrees meeting the requirements for related certifications, e.g. Certified Information Systems Auditor (CISA), etc. &nbsp;If you wish to apply for a position with Legislative Audit please complete the application below and attach your resume.</span>
                        </div>
                        <div id="ctl00_MainContent_pc_ctl02_pnlWrap" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_MainContent_pc_ctl02_btnSubmit2')">
                        <div style="text-align: center;">
                            <h3>Contact Info</h3>
                        </div>
                        <div style="border: solid 1px black; padding: 5px 5px 5px 5px">
                            <table style="width: 100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <label><span style="color: Red;">*</span>First Name</label>
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtFirstName" id="ctl00_MainContent_pc_ctl02_txtFirstName" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator1" style="color:Red;display:none;">Please enter your first name.</span>
                                        </td>
                                        <td>
                                            <label><span style="color: Red;">*</span>Last Name</label>
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtLastName" id="ctl00_MainContent_pc_ctl02_txtLastName" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator2" style="color:Red;display:none;">Please enter your last name.</span>
                                        </td>
                                        <td>
                                            <label><span style="color: Red;">*</span>Middle Name</label>
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtMiddleName" id="ctl00_MainContent_pc_ctl02_txtMiddleName" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator3" style="color:Red;display:none;">Please enter your middle name.</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <label for="inputEmail3" class="">
                                                <span style="color: Red;">*</span> Mailing Address:
                                            </label>
                                        </td>
                                        <td colspan="7">
                                            <input name="ctl00$MainContent$pc$ctl02$txtAddress" id="ctl00_MainContent_pc_ctl02_txtAddress" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator7" style="color:Red;display:none;">Please enter your address.</span>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="auto-style1">
                                            <label>
                                                <span style="color: Red;">*</span>City
                                            </label>
                                        </td>
                                        <td class="auto-style1">&nbsp;
                                        </td>
                                        <td class="auto-style1">
                                        <input name="ctl00$MainContent$pc$ctl02$txtCity" id="ctl00_MainContent_pc_ctl02_txtCity" type="text">
                                        <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator8" style="color:Red;display:none;">Please enter your city.</span>
                                        </td>
                                        <td class="auto-style1">
                                        <label>
                                        <span style="color: Red;">*</span>State
                                        </label>
                                        </td>
                                        <td class="auto-style1">&nbsp;
                                        </td>
                                        <td class="auto-style1">
                                        <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator29" style="color:Red;display:none;">Please enter your state.</span>
                                        <select name="ctl00$MainContent$pc$ctl02$ddlState" id="ctl00_MainContent_pc_ctl02_ddlState">
                                        <option selected="selected" value="">-- SELECT STATE --</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="">-Select-</option>
                                        </select>
                                        </td>
                                        <td class="auto-style1">
                                        <label>
                                        <span style="color: Red;">*</span>Zip
                                        </label>
                                        </td>
                                        <td class="auto-style1">&nbsp;
                                        </td>
                                        <td class="auto-style1">
                                        <input name="ctl00$MainContent$pc$ctl02$txtZip" id="ctl00_MainContent_pc_ctl02_txtZip" type="text">
                                        <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator9" style="color:Red;display:none;">Please enter zip code.</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>
                                                <span style="color: Red;">*</span>Home Phone
                                            </label>
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtHomePhone" maxlength="15" id="ctl00_MainContent_pc_ctl02_txtHomePhone" class="form-control" placeholder="xxx-xxx-xxxx" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator5" style="color:Red;display:none;">Please enter your phone number.</span>
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>
                                            <label>
                                            <span style="color: Red;">*</span>Wireless Phone
                                        </label>
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtWirelessPhone" maxlength="15" id="ctl00_MainContent_pc_ctl02_txtWirelessPhone" class="form-control" placeholder="xxx-xxx-xxxx" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator6" style="color:Red;display:none;">Please enter your phone number.</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label><span style="color: Red;">*</span>Email Address</label>
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator30" style="color:Red;display:none;">Please enter your email.</span>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmail" id="ctl00_MainContent_pc_ctl02_txtEmail" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_EmailValidator" style="color:Red;display:none;"><br>Email is not vaild.</span>
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td colspan="2">
                                            <label><span style="color: Red;">*</span>Preferred means to contact you:</label>
                                        </td>
                                        <td>&nbsp;
                                        </td>
                                        <td>
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator31" style="color:Red;display:none;">Please enter contact method.</span>
                                            <input name="ctl00$MainContent$pc$ctl02$txtContactMethod" id="ctl00_MainContent_pc_ctl02_txtContactMethod" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <label>Type of position for which you are applying:</label>
                        <div style="border: solid 1px black; padding: 5px 5px 5px 5px">
                            <table style="width: 100%">
                                <tbody>
                                    <tr>
                                    <td style="width: 50px;">
                                        <label>
                                            <span style="color: Red;">*</span>1.
                                        </label>
                                    </td>
                                    <td>
                                        <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator4" style="color:Red;display:none;">Position is required</span>
                                        <input name="ctl00$MainContent$pc$ctl02$txtPosition1" id="ctl00_MainContent_pc_ctl02_txtPosition1" style="width:100%;" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 50px;">2.</td>
                                        <td>
                                        <input name="ctl00$MainContent$pc$ctl02$txtPosition2" id="ctl00_MainContent_pc_ctl02_txtPosition2" style="width:100%;" type="text">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div style="text-align: center;">
                            <h3>Employment Status</h3>
                        </div>
                        <div style="border: solid 1px black; padding: 5px 5px 5px 5px;">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 35%">
                                            <label>
                                            <span style="color: Red;">*</span>From what source did you learn of this position?
                                            </label>
                                        </td>
                                        <td>
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator10" style="color:Red;display:none;">Source is required.</span>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmploymentSource" id="ctl00_MainContent_pc_ctl02_txtEmploymentSource" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 35%">
                                            <label>
                                                <span style="color: Red;">*</span>Will you accept employment anywhere in the State?
                                            </label>
                                        </td>
                                        <td>
                                            <table id="ctl00_MainContent_pc_ctl02_rblWorkEntireState" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblWorkEntireState_0" name="ctl00$MainContent$pc$ctl02$rblWorkEntireState" value="Yes" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblWorkEntireState_0">Yes&nbsp;</label>
                                                        </td>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblWorkEntireState_1" name="ctl00$MainContent$pc$ctl02$rblWorkEntireState" value="No" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblWorkEntireState_1">No
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 35%">If no, indicate acceptable locations(s).
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtWorkLocations" id="ctl00_MainContent_pc_ctl02_txtWorkLocations" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 35%">
                                            <label>
                                                <span style="color: Red;">*</span>Have you ever filed an application for employment with this agency?
                                            </label>
                                        </td>
                                        <td>
                                            <table id="ctl00_MainContent_pc_ctl02_rblAppliedBefore" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblAppliedBefore_0" name="ctl00$MainContent$pc$ctl02$rblAppliedBefore" value="Yes" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblAppliedBefore_0">Yes&nbsp;
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblAppliedBefore_1" name="ctl00$MainContent$pc$ctl02$rblAppliedBefore" value="No" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblAppliedBefore_1">No
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 35%">
                                            <label>
                                                <span style="color: Red;">*</span>What is your minimum salary requirement?
                                            </label>
                                        </td>
                                        <td>
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator27" style="color:Red;display:none;">Minimum salary is required.</span>
                                            <input name="ctl00$MainContent$pc$ctl02$txtMinimumSalary" id="ctl00_MainContent_pc_ctl02_txtMinimumSalary" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 52%">
                                            <label>
                                            <span style="color: Red;">*</span>Have you ever been convicted of any law violation other than a minor traffic violation?
                                            </label>
                                        </td>
                                        <td>
                                            <table id="ctl00_MainContent_pc_ctl02_rblConvicted" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblConvicted_0" name="ctl00$MainContent$pc$ctl02$rblConvicted" value="Yes" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblConvicted_0">Yes&nbsp;
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblConvicted_1" name="ctl00$MainContent$pc$ctl02$rblConvicted" value="No" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblConvicted_1">No
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">If yes, list offense, showing charge, date, where committed and disposition of case, or attach a separate sheet if additional space is required
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input name="ctl00$MainContent$pc$ctl02$txtConvictedList" id="ctl00_MainContent_pc_ctl02_txtConvictedList" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 35%">
                                            <label>
                                                <span style="color: Red;">*</span>Is there anything in your past that might prevent you from obtaining a surety bond?
                                            </label>
                                        </td>
                                        <td>
                                            <table id="ctl00_MainContent_pc_ctl02_rblSuretyBond" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblSuretyBond_0" name="ctl00$MainContent$pc$ctl02$rblSuretyBond" value="Yes" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblSuretyBond_0">Yes&nbsp;
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblSuretyBond_1" name="ctl00$MainContent$pc$ctl02$rblSuretyBond" value="No" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblSuretyBond_1">No
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 35%">If yes, please explain?
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtSuretyBondDetail" id="ctl00_MainContent_pc_ctl02_txtSuretyBondDetail" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <label>
                                                <span style="color: Red;">*</span>List professional license(s) and membership(s) relevant to the position for which you are applying
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator28" style="color:Red;display:none;">Professional license(s) is required.</span>
                                            <input name="ctl00$MainContent$pc$ctl02$txtProfessionalLicense1" id="ctl00_MainContent_pc_ctl02_txtProfessionalLicense1" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input name="ctl00$MainContent$pc$ctl02$txtProfessionalLicense2" id="ctl00_MainContent_pc_ctl02_txtProfessionalLicense2" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input name="ctl00$MainContent$pc$ctl02$txtProfessionalLicense3" id="ctl00_MainContent_pc_ctl02_txtProfessionalLicense3" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div style="text-align: center;">
                            <h3>Educational History</h3>
                        </div>
                        <div style="border: 1px solid black; padding: 5px; text-align: center">&nbsp;&nbsp;
                            <label>
                                <u>High School:</u>
                            </label>
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: center">Name and Location</td>
                                        <td style="text-align: center">Date graduated</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtHighSchoolNameLocation" id="ctl00_MainContent_pc_ctl02_txtHighSchoolNameLocation" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtHighSchoolDateGraduated" id="ctl00_MainContent_pc_ctl02_txtHighSchoolDateGraduated" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator1" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            &nbsp;&nbsp;
                            <label>
                                <u>Post Secondary Schools, Colleges, Universities:</u>
                            </label>
                            <br>
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td style="text-align: center">Name and Location</td>
                                        <td style="text-align: center">From</td>
                                        <td style="text-align: center">To</td>
                                        <td style="text-align: center">Major and Degree Awarded</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege1NameLocation" id="ctl00_MainContent_pc_ctl02_txtCollege1NameLocation" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege1From" id="ctl00_MainContent_pc_ctl02_txtCollege1From" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator2" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege1To" id="ctl00_MainContent_pc_ctl02_txtCollege1To" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator3" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege1MajorDegree" id="ctl00_MainContent_pc_ctl02_txtCollege1MajorDegree" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: center">Date Graduated</td>
                                        <td style="text-align: center">Hours Completed</td>
                                        <td style="text-align: center">GPA in major / overall</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege1DateGraduated" id="ctl00_MainContent_pc_ctl02_txtCollege1DateGraduated" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator4" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege1Hours" id="ctl00_MainContent_pc_ctl02_txtCollege1Hours" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege1GPAMajor" id="ctl00_MainContent_pc_ctl02_txtCollege1GPAMajor" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td style="text-align: center">Name and Location</td>
                                        <td style="text-align: center">From</td>
                                        <td style="text-align: center">To</td>
                                        <td style="text-align: center">Major and Degree Awarded</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege2NameLocation" id="ctl00_MainContent_pc_ctl02_txtCollege2NameLocation" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege2From" id="ctl00_MainContent_pc_ctl02_txtCollege2From" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator5" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege2To" id="ctl00_MainContent_pc_ctl02_txtCollege2To" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator6" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege2MajorDegree" id="ctl00_MainContent_pc_ctl02_txtCollege2MajorDegree" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: center">Date Graduated</td>
                                        <td style="text-align: center">Hours Completed</td>
                                        <td style="text-align: center">GPA in major / overall</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege2DateGraduated" id="ctl00_MainContent_pc_ctl02_txtCollege2DateGraduated" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator7" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege2Hours" id="ctl00_MainContent_pc_ctl02_txtCollege2Hours" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege2GPAMajor" id="ctl00_MainContent_pc_ctl02_txtCollege2GPAMajor" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td style="text-align: center">Name and Location</td>
                                        <td style="text-align: center">From</td>
                                        <td style="text-align: center">To</td>
                                        <td style="text-align: center">Major and Degree Awarded</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege3NameLocation" id="ctl00_MainContent_pc_ctl02_txtCollege3NameLocation" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege3From" id="ctl00_MainContent_pc_ctl02_txtCollege3From" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator8" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege3To" id="ctl00_MainContent_pc_ctl02_txtCollege3To" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator9" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege3MajorDegree" id="ctl00_MainContent_pc_ctl02_txtCollege3MajorDegree" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: center">Date Graduated</td>
                                        <td style="text-align: center">Hours Completed</td>
                                        <td style="text-align: center">GPA in major / overall</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege3DateGraduated" id="ctl00_MainContent_pc_ctl02_txtCollege3DateGraduated" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator10" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege3Hours" id="ctl00_MainContent_pc_ctl02_txtCollege3Hours" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege3GPAMajor" id="ctl00_MainContent_pc_ctl02_txtCollege3GPAMajor" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td style="text-align: center">Name and Location</td>
                                        <td style="text-align: center">From</td>
                                        <td style="text-align: center">To</td>
                                        <td style="text-align: center">Major and Degree Awarded</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege4NameLocation" id="ctl00_MainContent_pc_ctl02_txtCollege4NameLocation" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege4From" id="ctl00_MainContent_pc_ctl02_txtCollege4From" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator11" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege4To" id="ctl00_MainContent_pc_ctl02_txtCollege4To" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator12" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege4MajorDegree" id="ctl00_MainContent_pc_ctl02_txtCollege4MajorDegree" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: center">Date Graduated</td>
                                        <td style="text-align: center">Hours Completed</td>
                                        <td style="text-align: center">GPA in major / overall</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege4DateGraduated" id="ctl00_MainContent_pc_ctl02_txtCollege4DateGraduated" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator13" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege4Hours" id="ctl00_MainContent_pc_ctl02_txtCollege4Hours" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtCollege4GPAMajor" id="ctl00_MainContent_pc_ctl02_txtCollege4GPAMajor" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            <b>Request your colleges or universities to send your transcripts directly to our office</b>
                        </div>
                        <br>
                        <div style="text-align:center;">
                            <h3>CPA Exam</h3>
                        </div>
                        <div style="border:solid 1px black; padding:5px;">
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td style="width:45%">
                                            Do you hold a license to practice as a CPA in Arkansas?
                                        </td>
                                        <td style="width:20%">
                                            <table id="ctl00_MainContent_pc_ctl02_rblCPA" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblCPA_0" name="ctl00$MainContent$pc$ctl02$rblCPA" value="Yes" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblCPA_0">Yes&nbsp;</label>
                                                        </td>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblCPA_1" name="ctl00$MainContent$pc$ctl02$rblCPA" value="No" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblCPA_1">No</label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td style="width:35%">
                                            If yes, proceed to "Work History"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:45%">
                                            Have you passed part of the CPA exam?
                                        </td>
                                        <td style="width:20%">
                                            <table id="ctl00_MainContent_pc_ctl02_rblPassedPart" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblPassedPart_0" name="ctl00$MainContent$pc$ctl02$rblPassedPart" value="Yes" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblPassedPart_0">Yes&nbsp;</label>
                                                        </td>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblPassedPart_1" name="ctl00$MainContent$pc$ctl02$rblPassedPart" value="No" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblPassedPart_1">No</label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td style="width:35%">
                                            If Yes, what parts(s) &nbsp;
                                            <input name="ctl00$MainContent$pc$ctl02$txtCPAPartPassed" id="ctl00_MainContent_pc_ctl02_txtCPAPartPassed" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Are you eligible to sit for the CPA exam?
                                        </td>
                                        <td colspan="2">
                                            <table id="ctl00_MainContent_pc_ctl02_rblSitForCPA" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblSitForCPA_0" name="ctl00$MainContent$pc$ctl02$rblSitForCPA" value="Yes" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblSitForCPA_0">Yes&nbsp;</label>
                                                        </td>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblSitForCPA_1" name="ctl00$MainContent$pc$ctl02$rblSitForCPA" value="No" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblSitForCPA_1">No</label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">If no, what are your plans to become eligible to sit for the CPA exam?</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <input name="ctl00$MainContent$pc$ctl02$txtPlansToSit" id="ctl00_MainContent_pc_ctl02_txtPlansToSit" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Are you eligible to hold an active CPA license in Arkansas?
                                        </td>
                                        <td colspan="2">
                                            <table id="ctl00_MainContent_pc_ctl02_rblHoldArkansasCPA" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblHoldArkansasCPA_0" name="ctl00$MainContent$pc$ctl02$rblHoldArkansasCPA" value="Yes" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblHoldArkansasCPA_0">Yes&nbsp;</label>
                                                        </td>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblHoldArkansasCPA_1" name="ctl00$MainContent$pc$ctl02$rblHoldArkansasCPA" value="No" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblHoldArkansasCPA_1">No</label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div style="text-align:center;">
                            <h3>Work History</h3>
                        </div>
                        <div>
                            List all prior work experience, including military service, beginning with your most recent employment.
                            Include all work experience even if you do not believe that experience is related to the position for which you are applying.
                            <br><br>
                        </div>
                        <div style="border: solid 1px black;padding:5px;">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 5%">1.</td>
                                        <td style="width: 30%">
                                            <label>
                                                <span style="color: Red;">*</span>Current or most recent employer
                                            </label>
                                        </td>
                                        <td>
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator11" style="color:Red;display:none;">Employer is required.</span>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer1Name" id="ctl00_MainContent_pc_ctl02_txtEmployer1Name" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <label>
                                                <span style="color: Red;">*</span>Mailing Address
                                            </label>
                                        </td>
                                        <td>
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator12" style="color:Red;display:none;">Employer address is required.</span>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer1Address1" id="ctl00_MainContent_pc_ctl02_txtEmployer1Address1" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer1Address2" id="ctl00_MainContent_pc_ctl02_txtEmployer1Address2" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            <label><span style="color: Red;">*</span>City:</label>
                                        </td>
                                        <td>
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator13" style="color:Red;display:none;">Employer City is required.</span>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer1City" id="ctl00_MainContent_pc_ctl02_txtEmployer1City" type="text">
                                        </td>
                                        <td>
                                            <label><span style="color: Red;">*</span>State</label>
                                        </td>
                                        <td>
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator14" style="color:Red;display:none;">Employer state is required.</span>
                                            <select name="ctl00$MainContent$pc$ctl02$ddlEmployer1State" id="ctl00_MainContent_pc_ctl02_ddlEmployer1State">
                                            <option selected="selected" value="">-- SELECT STATE --</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="">-Select-</option>
                                        </select>
                                        </td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            <label><span style="color: Red;">*</span>Zip Code</label>
                                        </td>
                                        <td>
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator15" style="color:Red;display:none;">Employer zip is required.</span>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer1Zip" id="ctl00_MainContent_pc_ctl02_txtEmployer1Zip" type="text">
                                        </td>
                                        <td>
                                            <label>
                                                <span style="color: Red;">*</span>Business Phone
                                            </label>
                                        </td>
                                        <td>
                                            <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator16" style="color:Red;display:none;">Employer phone is required.</span>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer1Phone" id="ctl00_MainContent_pc_ctl02_txtEmployer1Phone" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table style="width:100%;">
                                <tbody>
                                <tr>
                                <td>
                                &nbsp;&nbsp;&nbsp;
                                </td>
                                <td>
                                <label>
                                <span style="color: Red;">*</span>Supervisor's Name
                                </label>
                                </td>
                                <td>
                                <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator17" style="color:Red;display:none;">Employer supervisor is required.</span>
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1Supervisor" id="ctl00_MainContent_pc_ctl02_txtEmployer1Supervisor" style="width:100%;" type="text">
                                </td>
                                <td>
                                &nbsp;
                                </td>
                                <td>
                                <label>
                                <span style="color: Red;">*</span>Name under which employed
                                </label>
                                </td>
                                <td>
                                <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator18" style="color:Red;display:none;">Name is required.</span>
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1NameEmployed" id="ctl00_MainContent_pc_ctl02_txtEmployer1NameEmployed" style="width:100%;" type="text">
                                </td>
                                </tr>
                                <tr>
                                <td>
                                <label><span style="color: Red;">*</span>Your job title(s)</label>
                                </td>
                                <td colspan="5">
                                <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator19" style="color:Red;display:none;">Job is required.</span>
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1JobTitle" id="ctl00_MainContent_pc_ctl02_txtEmployer1JobTitle" style="width:100%;" type="text">
                                </td>
                                </tr>
                                <tr>
                                <td>
                                <label><span style="color: Red;">*</span>Your specific job duties</label>
                                </td>
                                <td colspan="5">
                                <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator20" style="color:Red;display:none;">Job duty is required.</span>
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1JobDuty1" id="ctl00_MainContent_pc_ctl02_txtEmployer1JobDuty1" style="width:100%;" type="text">
                                </td>
                                </tr>
                                <tr>
                                <td>
                                &nbsp;
                                </td>
                                <td colspan="5">
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1JobDuty2" id="ctl00_MainContent_pc_ctl02_txtEmployer1JobDuty2" style="width:100%;" type="text">
                                </td>
                                </tr>
                                <tr>
                                <td>
                                &nbsp;
                                </td>
                                <td colspan="5">
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1JobDuty3" id="ctl00_MainContent_pc_ctl02_txtEmployer1JobDuty3" style="width:100%;" type="text">
                                </td>
                                </tr>
                                </tbody>
                            </table>
                            <table style="width:100%;">
                                <tbody>
                                <tr>
                                <td>
                                Employment Dates
                                </td>
                                </tr>
                                <tr>
                                <td><label><span style="color: Red;">*</span>From</label></td><td><label><span style="color: Red;">*</span>To</label></td><td>
                                </td></tr>
                                <tr>
                                <td>
                                <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator21" style="color:Red;display:none;">From date is required.</span>
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1From" id="ctl00_MainContent_pc_ctl02_txtEmployer1From" type="text">

                                <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator14" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                </td>
                                <td>
                                <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator22" style="color:Red;display:none;">To date is required.</span>
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1To" id="ctl00_MainContent_pc_ctl02_txtEmployer1To" type="text">

                                <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator15" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                <label><span style="color: Red;">*</span>Average Hours Worked Per Week</label>
                                </td>
                                <td>
                                <label><span style="color: Red;">*</span>Lowest Annual Salary</label>
                                </td>
                                <td>
                                <label><span style="color: Red;">*</span>Highest Annual Salary</label>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator23" style="color:Red;display:none;">Average hours required.</span>
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1AverageHours" id="ctl00_MainContent_pc_ctl02_txtEmployer1AverageHours" type="text"></td>
                                <td>
                                <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator24" style="color:Red;display:none;">Lowest salary required.</span>
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1LowestSalary" id="ctl00_MainContent_pc_ctl02_txtEmployer1LowestSalary" type="text"></td>
                                <td>
                                <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator25" style="color:Red;display:none;">Highes salary required.</span>
                                <input name="ctl00$MainContent$pc$ctl02$txtEmployer1HighestSalary" id="ctl00_MainContent_pc_ctl02_txtEmployer1HighestSalary" type="text"></td>
                                </tr>
                                </tbody>
                            </table>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                    <td>
                                    <label><span style="color: Red;">*</span>Reason For Leaving</label>
                                    </td><td>
                                    </td></tr>
                                    <tr>
                                    <td>
                                    <span id="ctl00_MainContent_pc_ctl02_RequiredFieldValidator26" style="color:Red;display:none;">Reason for leaving is required.</span>
                                    <input name="ctl00$MainContent$pc$ctl02$txtEmployer1Reason" id="ctl00_MainContent_pc_ctl02_txtEmployer1Reason" style="width:100%;" type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div style="border: solid 1px black;padding:5px;">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 5%">2.</td>
                                        <td style="width: 30%">Employer</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2Name" id="ctl00_MainContent_pc_ctl02_txtEmployer2Name" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Mailing Address</td>
                                    <td>
                                        <input name="ctl00$MainContent$pc$ctl02$txtEmployer2Address1" id="ctl00_MainContent_pc_ctl02_txtEmployer2Address1" style="width:100%;" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>
                                        <input name="ctl00$MainContent$pc$ctl02$txtEmployer2Address2" id="ctl00_MainContent_pc_ctl02_txtEmployer2Address2" style="width:100%;" type="text">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            City:
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2City" id="ctl00_MainContent_pc_ctl02_txtEmployer2City" type="text">
                                        </td>
                                        <td>
                                            State
                                        </td>
                                        <td>
                                            <select name="ctl00$MainContent$pc$ctl02$ddlEmployer2State" id="ctl00_MainContent_pc_ctl02_ddlEmployer2State">
                                                <option selected="selected" value="">-- SELECT STATE --</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="">-Select-</option>
                                            </select>
                                        </td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            Zip Code
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2Zip" id="ctl00_MainContent_pc_ctl02_txtEmployer2Zip" type="text">
                                        </td>
                                        <td>Business Phone</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2Phone" id="ctl00_MainContent_pc_ctl02_txtEmployer2Phone" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            Supervisor's Name
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2Supervisor" id="ctl00_MainContent_pc_ctl02_txtEmployer2Supervisor" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Name under which employed
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2NameEmployed" id="ctl00_MainContent_pc_ctl02_txtEmployer2NameEmployed" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Your job title(s)
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2JobTitle" id="ctl00_MainContent_pc_ctl02_txtEmployer2JobTitle" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Your specific job duties
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2JobDuty1" id="ctl00_MainContent_pc_ctl02_txtEmployer2JobDuty1" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                            <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2JobDuty2" id="ctl00_MainContent_pc_ctl02_txtEmployer2JobDuty2" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2JobDuty3" id="ctl00_MainContent_pc_ctl02_txtEmployer2JobDuty3" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            Employment Dates
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>From</td>
                                        <td>To</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2From" id="ctl00_MainContent_pc_ctl02_txtEmployer2From" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator16" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer2To" id="ctl00_MainContent_pc_ctl02_txtEmployer2To" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator17" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Average Hours Worked Per Week
                                        </td>
                                        <td>
                                            Lowest Annual Salary
                                        </td>
                                        <td>
                                            Highest Annual Salary
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer2AverageHours" id="ctl00_MainContent_pc_ctl02_txtEmployer2AverageHours" type="text"></td>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer2LowestSalary" id="ctl00_MainContent_pc_ctl02_txtEmployer2LowestSalary" type="text"></td>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer2HighestSalary" id="ctl00_MainContent_pc_ctl02_txtEmployer2HighestSalary" type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            Reason For Leaving
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer2Reason" id="ctl00_MainContent_pc_ctl02_txtEmployer2Reason" style="width:100%;" type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div style="border: solid 1px black;padding:5px;">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 5%">3.</td>
                                        <td style="width: 30%">Employer</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3Name" id="ctl00_MainContent_pc_ctl02_txtEmployer3Name" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Mailing Address</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3Address1" id="ctl00_MainContent_pc_ctl02_txtEmployer3Address1" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3Address2" id="ctl00_MainContent_pc_ctl02_txtEmployer3Address2" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            City:
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3City" id="ctl00_MainContent_pc_ctl02_txtEmployer3City" type="text">
                                        </td>
                                        <td>
                                            State
                                        </td>
                                        <td>
                                        <select name="ctl00$MainContent$pc$ctl02$ddlEmployer3State" id="ctl00_MainContent_pc_ctl02_ddlEmployer3State">
                                            <option selected="selected" value="">-- SELECT STATE --</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="">-Select-</option>
                                        </select>
                                        </td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            Zip Code
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3Zip" id="ctl00_MainContent_pc_ctl02_txtEmployer3Zip" type="text">
                                        </td>
                                        <td>Business Phone</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3Phone" id="ctl00_MainContent_pc_ctl02_txtEmployer3Phone" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            Supervisor's Name
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3Supervisor" id="ctl00_MainContent_pc_ctl02_txtEmployer3Supervisor" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Name under which employed
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3NameEmployed" id="ctl00_MainContent_pc_ctl02_txtEmployer3NameEmployed" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Your job title(s)
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3JobTitile" id="ctl00_MainContent_pc_ctl02_txtEmployer3JobTitile" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Your specific job duties
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3JobDuty1" id="ctl00_MainContent_pc_ctl02_txtEmployer3JobDuty1" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3JobDuty2" id="ctl00_MainContent_pc_ctl02_txtEmployer3JobDuty2" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3JobDuty3" id="ctl00_MainContent_pc_ctl02_txtEmployer3JobDuty3" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            Employment Dates
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>From</td>
                                        <td>To</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3From" id="ctl00_MainContent_pc_ctl02_txtEmployer3From" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator18" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3To" id="ctl00_MainContent_pc_ctl02_txtEmployer3To" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator19" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Average Hours Worked Per Week
                                        </td>
                                        <td>
                                            Lowest Annual Salary
                                        </td>
                                        <td>
                                            Highest Annual Salary
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer3AverageHours" id="ctl00_MainContent_pc_ctl02_txtEmployer3AverageHours" type="text"></td>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer3LowestSalary" id="ctl00_MainContent_pc_ctl02_txtEmployer3LowestSalary" type="text"></td>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer3HighestSalary" id="ctl00_MainContent_pc_ctl02_txtEmployer3HighestSalary" type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                        Reason For Leaving
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer3Reason" id="ctl00_MainContent_pc_ctl02_txtEmployer3Reason" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div style="border: solid 1px black;padding:5px;">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 5%">4.</td>
                                        <td style="width: 30%">Employer</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4Name" id="ctl00_MainContent_pc_ctl02_txtEmployer4Name" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Mailing Address</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4Address1" id="ctl00_MainContent_pc_ctl02_txtEmployer4Address1" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4Address2" id="ctl00_MainContent_pc_ctl02_txtEmployer4Address2" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            City:
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4City" id="ctl00_MainContent_pc_ctl02_txtEmployer4City" type="text">
                                        </td>
                                        <td>
                                            State
                                        </td>
                                        <td>
                                            <select name="ctl00$MainContent$pc$ctl02$ddlEmployer4State" id="ctl00_MainContent_pc_ctl02_ddlEmployer4State">
                                            <option selected="selected" value="">-- SELECT STATE --</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="">-Select-</option>
                                        </select>
                                        </td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            Zip Code
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4Zip" id="ctl00_MainContent_pc_ctl02_txtEmployer4Zip" type="text">
                                        </td>
                                        <td>Business Phone</td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4Phone" id="ctl00_MainContent_pc_ctl02_txtEmployer4Phone" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            Supervisor's Name
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4Supervisor" id="ctl00_MainContent_pc_ctl02_txtEmployer4Supervisor" style="width:100%;" type="text">
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Name under which employed
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4NameEmployed" id="ctl00_MainContent_pc_ctl02_txtEmployer4NameEmployed" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Your job title(s)
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4JobTitle" id="ctl00_MainContent_pc_ctl02_txtEmployer4JobTitle" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Your specific job duties
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4JobDuty1" id="ctl00_MainContent_pc_ctl02_txtEmployer4JobDuty1" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4JobDuty2" id="ctl00_MainContent_pc_ctl02_txtEmployer4JobDuty2" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td colspan="5">
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4JobDuty3" id="ctl00_MainContent_pc_ctl02_txtEmployer4JobDuty3" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                        Employment Dates
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>From</td>
                                        <td>To</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4From" id="ctl00_MainContent_pc_ctl02_txtEmployer4From" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator20" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtEmployer4To" id="ctl00_MainContent_pc_ctl02_txtEmployer4To" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator21" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Average Hours Worked Per Week
                                        </td>
                                        <td>
                                            Lowest Annual Salary
                                        </td>
                                        <td>
                                            Highest Annual Salary
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer4AverageHours" id="ctl00_MainContent_pc_ctl02_txtEmployer4AverageHours" type="text"></td>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer4LowestSalary" id="ctl00_MainContent_pc_ctl02_txtEmployer4LowestSalary" type="text"></td>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer4HighestSalary" id="ctl00_MainContent_pc_ctl02_txtEmployer4HighestSalary" type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            Reason For Leaving
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input name="ctl00$MainContent$pc$ctl02$txtEmployer4Reason" id="ctl00_MainContent_pc_ctl02_txtEmployer4Reason" style="width:100%;" type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div style="text-align:center;">
                            <h3>Military Service</h3>
                        </div>
                        <div style="border:solid 1px black; padding:5px;">
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            Have you served on active duty in the United States Military?&nbsp;&nbsp;
                                            <table id="ctl00_MainContent_pc_ctl02_rblActiveDuty" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblActiveDuty_0" name="ctl00$MainContent$pc$ctl02$rblActiveDuty" value="Yes" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblActiveDuty_0">Yes&nbsp;</label>
                                                        </td>
                                                        <td>
                                                            <input id="ctl00_MainContent_pc_ctl02_rblActiveDuty_1" name="ctl00$MainContent$pc$ctl02$rblActiveDuty" value="No" type="radio">
                                                            <label for="ctl00_MainContent_pc_ctl02_rblActiveDuty_1">No</label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Branch of Service.
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtBranch" id="ctl00_MainContent_pc_ctl02_txtBranch" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%">
                                            Date of Entry?
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtMilitaryStartDate" id="ctl00_MainContent_pc_ctl02_txtMilitaryStartDate" style="width:100%;" type="text">
                                            <span id="ctl00_MainContent_pc_ctl02_RegularExpressionValidator22" style="color:Red;display:none;">Please enter correct date format MM/DD/YYYY</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%">
                                            Type of Discharge?
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtDischarge" id="ctl00_MainContent_pc_ctl02_txtDischarge" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%">
                                            Final Rank?
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtFinalRank" id="ctl00_MainContent_pc_ctl02_txtFinalRank" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div style="text-align:center;">
                            <h3>Special Skills</h3>
                        </div>
                        <div style="border:solid 1px black; padding:5px;">
                            <table style="padding: 5 20 5 20; width:100%;">
                                <tbody>
                                    <tr>
                                        <td style="width:25%">
                                            Software Application Skills
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtSoftwareSkills1" id="ctl00_MainContent_pc_ctl02_txtSoftwareSkills1" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:25%">
                                            &nbsp;
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtSoftwareSkills2" id="ctl00_MainContent_pc_ctl02_txtSoftwareSkills2" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%">
                                            Any other relevant skills
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtOtherSkills1" id="ctl00_MainContent_pc_ctl02_txtOtherSkills1" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%">
                                            &nbsp;
                                        </td>
                                        <td>
                                            <input name="ctl00$MainContent$pc$ctl02$txtOtherSkills2" id="ctl00_MainContent_pc_ctl02_txtOtherSkills2" style="width:100%;" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div style="text-align:center;">
                            <h3>References</h3>
                            Please list three (3) individuals not related to you, who have knowledge of your work qualifications and are not previous or current employers.
                        </div>
                        <div style="border:solid 1px black; padding:5px">
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td style="width:20%">&nbsp;&nbsp;Name and Title</td>
                                        <td style="width:20%">&nbsp;&nbsp;City and State</td>
                                        <td style="width:20%">&nbsp;&nbsp;Phone Number</td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><div style="float:left;"><span>1.&nbsp;</span></div><div style="float:left; width:92%;"><input name="ctl00$MainContent$pc$ctl02$txtReference1Name" id="ctl00_MainContent_pc_ctl02_txtReference1Name" style="width:100%;" type="text"></div></td>
                                        <td style="width:20%">&nbsp;<input name="ctl00$MainContent$pc$ctl02$txtReference1CityState" id="ctl00_MainContent_pc_ctl02_txtReference1CityState" style="width:92%;" type="text"></td>
                                        <td style="width:20%"><input name="ctl00$MainContent$pc$ctl02$txtReference1Phone" id="ctl00_MainContent_pc_ctl02_txtReference1Phone" style="width:92%;" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><div style="float:left;"><span>2.&nbsp;</span></div><div style="float:left; width:92%;"><input name="ctl00$MainContent$pc$ctl02$txtReference2Name" id="ctl00_MainContent_pc_ctl02_txtReference2Name" style="width:100%;" type="text"></div></td>
                                        <td style="width:20%">&nbsp;<input name="ctl00$MainContent$pc$ctl02$txtReference2CityState" id="ctl00_MainContent_pc_ctl02_txtReference2CityState" style="width:92%;" type="text"></td>
                                        <td style="width:20%"><input name="ctl00$MainContent$pc$ctl02$txtReference2Phone" id="ctl00_MainContent_pc_ctl02_txtReference2Phone" style="width:92%;" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><div style="float:left;"><span>3.&nbsp;</span></div><div style="float:left; width:92%;"><input name="ctl00$MainContent$pc$ctl02$txtReference3Name" id="ctl00_MainContent_pc_ctl02_txtReference3Name" style="width:100%;" type="text"></div></td>
                                        <td style="width:20%">&nbsp;<input name="ctl00$MainContent$pc$ctl02$txtReference3CityState" id="ctl00_MainContent_pc_ctl02_txtReference3CityState" style="width:92%;" type="text"></td>
                                        <td style="width:20%"><input name="ctl00$MainContent$pc$ctl02$txtReference3Phone" id="ctl00_MainContent_pc_ctl02_txtReference3Phone" style="width:92%;" type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div style="text-align:center;">
                            <h3>Independence, Integrity and Objectivity</h3>
                            Please list any relative employed in, appointed to, or elected to a position in a governmental entity in the State.
                        </div>
                        <div style="border:solid 1px black; padding:5px;">
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td style="width:20%">&nbsp;&nbsp;Name</td>
                                        <td style="width:20%">&nbsp;&nbsp;Relation</td>
                                        <td style="width:20%">&nbsp;&nbsp;Government Employer</td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><div style="float:left;"><span>1.&nbsp;</span></div><div style="float:left; width:92%;"><input name="ctl00$MainContent$pc$ctl02$txtIntegrityName1" id="ctl00_MainContent_pc_ctl02_txtIntegrityName1" style="width:100%;" type="text"></div></td>
                                        <td style="width:20%">&nbsp;<input name="ctl00$MainContent$pc$ctl02$txtIntegrityRelation1" id="ctl00_MainContent_pc_ctl02_txtIntegrityRelation1" style="width:92%;" type="text"></td>
                                        <td style="width:20%"><input name="ctl00$MainContent$pc$ctl02$txtIntegrityGovEmployer1" id="ctl00_MainContent_pc_ctl02_txtIntegrityGovEmployer1" style="width:92%;" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><div style="float:left;"><span>2.&nbsp;</span></div><div style="float:left; width:92%;"><input name="ctl00$MainContent$pc$ctl02$txtIntegrityName2" id="ctl00_MainContent_pc_ctl02_txtIntegrityName2" style="width:100%;" type="text"></div></td>
                                        <td style="width:20%">&nbsp;<input name="ctl00$MainContent$pc$ctl02$txtIntegrityRelation2" id="ctl00_MainContent_pc_ctl02_txtIntegrityRelation2" style="width:92%;" type="text"></td>
                                        <td style="width:20%"><input name="ctl00$MainContent$pc$ctl02$txtIntegrityGovEmployer2" id="ctl00_MainContent_pc_ctl02_txtIntegrityGovEmployer2" style="width:92%;" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><div style="float:left;"><span>3.&nbsp;</span></div><div style="float:left; width:92%;"><input name="ctl00$MainContent$pc$ctl02$txtIntegrityName3" id="ctl00_MainContent_pc_ctl02_txtIntegrityName3" style="width:100%;" type="text"></div></td>
                                        <td style="width:20%">&nbsp;<input name="ctl00$MainContent$pc$ctl02$txtIntegrityRelation3" id="ctl00_MainContent_pc_ctl02_txtIntegrityRelation3" style="width:92%;" type="text"></td>
                                        <td style="width:20%"><input name="ctl00$MainContent$pc$ctl02$txtIntegrityGovEmployer3" id="ctl00_MainContent_pc_ctl02_txtIntegrityGovEmployer3" style="width:92%;" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><div style="float:left;"><span>4.&nbsp;</span></div><div style="float:left; width:92%;"><input name="ctl00$MainContent$pc$ctl02$txtIntegrityName4" id="ctl00_MainContent_pc_ctl02_txtIntegrityName4" style="width:100%;" type="text"></div></td>
                                        <td style="width:20%">&nbsp;<input name="ctl00$MainContent$pc$ctl02$txtIntegrityRelation4" id="ctl00_MainContent_pc_ctl02_txtIntegrityRelation4" style="width:92%;" type="text"></td>
                                        <td style="width:20%"><input name="ctl00$MainContent$pc$ctl02$txtIntegrityGovEmployer4" id="ctl00_MainContent_pc_ctl02_txtIntegrityGovEmployer4" style="width:92%;" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><div style="float:left;"><span>5.&nbsp;</span></div><div style="float:left; width:92%;"><input name="ctl00$MainContent$pc$ctl02$txtIntegrityName5" id="ctl00_MainContent_pc_ctl02_txtIntegrityName5" style="width:100%;" type="text"></div></td>
                                        <td style="width:20%">&nbsp;<input name="ctl00$MainContent$pc$ctl02$txtIntegrityRelation5" id="ctl00_MainContent_pc_ctl02_txtIntegrityRelation5" style="width:92%;" type="text"></td>
                                        <td style="width:20%"><input name="ctl00$MainContent$pc$ctl02$txtIntegrityGovEmployer5" id="ctl00_MainContent_pc_ctl02_txtIntegrityGovEmployer5" style="width:92%;" type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div>
                            <span style="text-align:center"><h3>Before you submit this Application</h3></span>
                            <ul>
                                <li>
                                    Review the application form to be sure that all entries have been completed properly. Please include your resume with the completed application form. If the job you are applying for
                                    requires a college degree, an official transcript sent directly to Arkansas Legislative Audit (ALA) from the college or university will be required as a condition of employment.
                                </li>
                                <br>
                                <li>
                                    I hereby declare that, to the best of my knowledge and belief, the information on this application is correct and complete. I understand that all statements in this application for
                                    employment are subject to verification and that knowingly making a false or misleading statement in this application may be cause for rejection of this application or for dismissal
                                    after employment
                                </li>
                                <br>
                                <li>
                                    My signed application for employment with ALA grants permission to ALA to check references with the current and former employers and personal references and hereby releases ALA,
                                    the current and former employers, and the personal references from any claims related to the references.
                                </li>
                                <br>
                                <li>
                                    I understand that, as a condition of employment, ALA requires a criminal background check and compliance with other specific agency hiring policies and that failure to meet these
                                    requirements may lead to my rejection as an applicant or for dismissal after employment. A conviction of a crime does not automatically bar an applicant from employment.
                                </li>
                                <br>
                                <li>
                                    I understand that ALA does not discriminate on the basis of race, color, national origin, sex, religion, age, disability, or political affiliation in employment.
                                </li>
                                <br>
                                <li>
                                    I understand that, as a condition of employment, I will be required to provide proof of eligibility to work in the United States pursuant to the Immigration Reform and Control Act of 1986.
                                </li>
                                <br>
                                <li>
                                    I understand that it is the policy of the State of Arkansas to maintain a drug-free workplace. Therefore, the unlawful manufacture, distribution, dispensation, possession or use
                                    of a controlled substance in the State's workplace is prohibited. Furthermore, any employee of ALA who violates the State's drug-free workplace policy will be subject to discipline
                                    that may include dismissal from employment.
                                </li>
                                <br>
                                <li>
                                    I understand that employment with ALA requires an acceptable driver's safety record and that, if my current or future driver's record is unacceptable under the State's Vehicle
                                    Safety Program, my application may be rejected or I may be subject to termination after employment.
                                </li>
                                <br>
                                <li>
                                    I understand that my application may be subject to disclosure as a public record under the Arkansas Freedom of Information Act.
                                </li>
                                <br>
                                <li>
                                    I understand that an offer of employment, as well as subsequent continuing employment, by ALA is presumed to be voluntary and indefinite for both employee and the employer.
                                </li>
                                <br>
                                <li>
                                    I understand that if I am hired, I will be required to disclose the nature and extent of any other employment activities, and I will be required to comply with ALA’s policy
                                    regarding other employment.
                                </li>
                                <br>
                                <li>
                                    I understand that if I am hired, I will be required to comply with the standards of independence, regulations, interpretations, and rulings of the American Institute of
                                    Certified Public Accountants (AICPA); Government Auditing Standards issued by the Comptroller General of the United States; the Arkansas State Board of Public Accountancy;
                                    Arkansas Code Annotated; and other regulatory bodies as applicable.
                                </li>
                                <br>
                                <li>
                                    I affirm that it is my genuine intent to seek employment with ALA, and this application is submitted solely for that purpose and for no other purposes.
                                    (You will be asked to sign and date the application form upon interview.)
                                </li>
                                <br>
                            </ul>
                            <input name="ctl00$MainContent$pc$ctl02$btnSubmit2" value="Submit Application" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$MainContent$pc$ctl02$btnSubmit2&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_MainContent_pc_ctl02_btnSubmit2" class="btn searchbutton simplebutton" type="submit">
                        </div>
                        <div class="form-group">
                        </div>
                        <div>
                            <label for="inputEmail3">Upload Resume:</label>
                            <div>
                                <input name="ctl00$MainContent$pc$ctl02$Resume" id="ctl00_MainContent_pc_ctl02_Resume" class="btn" size="20" type="file">
                            </div>
                        </div>
                        <div>
                            <div>
                                <span id="ctl00_MainContent_pc_ctl02_ctrlGoogleReCaptcha" theme="clean"><div class="g-recaptcha" data-sitekey="6LdSiE8UAAAAALhBPMbDSc5ngW9SaK2TBlCdjNr6"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LdSiE8UAAAAALhBPMbDSc5ngW9SaK2TBlCdjNr6&amp;co=aHR0cDovLzEwLjAuNTAuMjI6ODA.&amp;hl=en&amp;v=v1522970272143&amp;size=normal&amp;cb=42xiiqhddmlb" role="presentation" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" width="304" height="78" frameborder="0"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div></span>
                                <br>
                            </div>
                        </div>
                        <div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<link rel="stylesheet" href="{{ asset('css/mp.css') }}">
