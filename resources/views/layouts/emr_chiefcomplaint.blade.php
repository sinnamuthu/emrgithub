
  <!-- Modal Appointment -->
  <div class="modal fade" id="chiefcomplaintModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered tab-work" role="document">
      <div class="modal-content">
        <div class="modal-header">

        </div>
        <div class="emr">
          <h3>Chief Complaint</h3>
          <form method="post" action="{{ route('emr_examination') }}">
            @csrf
            <div class="row form-wrap">
                <aside class="col-md-4">
                <label>Examination Date*</label>
                <div class='input-group date' id='startDate'>					
                <span class="input-group-addon input-group-text"><span class="fa fa-calendar"></span></span>
                <input type='date' class="form-control" name="examdate" placeholder="Exam. Date" />
                </div>
                </aside>
                <aside class="col-md-4">
                <label>Doctor</label>
                  <select id="inputState" name="exam_doctor" class="form-select">
                    <option selected value="gokul">Gokul</option>
                  </select>
                </aside>
                <aside class="col-md-4">
                  <label>Chief Complaint</label>
                  <select id="inputState" name="chief_complaint" class="form-select">
                    <option selected value="chief complaint">chief Complaint</option>
                  </select>
                  </aside>
              </div>
                <div class="form-wrap">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="exam_description" id="description" placeholder="">
                <input type="hidden" class="form-control ic mail" name="appo_id" id="appo_id"  value="{{$appointment_id}}" >
                <input type="hidden" class="form-control " name="branch" id="branch"  value="{{auth()->user()->branch}}" >	
              </div>
                <hr />
                <h4 class="text-center">Clinical findings</h4>
                <div class="form-wrap mb0">
      <label>Occlusion</label>
      </div>
      <div class="form-wrap">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" value="1" name="class1" id="class1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Class 1</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" value="1" name="class2" id="class2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Class 2</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" value="1" name="class3" id="class3" value="option3">
        <label class="form-check-label" for="inlineRadio3">Class 3</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" value="1" name="bimaxillary" id="class3" value="option3">
        <label class="form-check-label" for="inlineRadio3">Bi-maxillary protrusion</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" value="1" name="none" id="class3" value="option3">
        <label class="form-check-label" for="inlineRadio3">None</label>
      </div>
      </div>
      
                <div class="form-wrap">
                <label for="subType" class="form-label">Sub Type</label>
                  <select id="inputState" name="subtype" class="form-select">
                    <option selected value="subtype" >subtype</option>
                  </select>
                </div>
        
        
                    <div class="form-wrap mb0">
                      <label>Wisdom Teeth</label>
                    </div>
                <div class="row form-wrap wisdom">
              <aside class="col-sm-3">
                   <label for="chkSelect">
                  <input type="checkbox" value="1" name="18" id="chkSelect" />
                  Teeth No. 18
                  </label>
                  <div class="custom-select" id="content" style="display:none">
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Erupted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Partially erupted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Impacted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Extracted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Missing</label>
                  </div>
                  </div>
              </aside>
              <aside class="col-sm-3">
                   <label for="chkSelect2">
                  <input type="checkbox" value="1" name="28" id="chkSelect2" />
                  Teeth No. 28
                  </label>
                  <div class="custom-select" id="content2" style="display:none">
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Erupted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Partially erupted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Impacted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Extracted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Missing</label>
                  </div>
                  </div>
              </aside>
              <aside class="col-sm-3">
                   <label for="chkSelect3">
                  <input type="checkbox" value="1" name="38" id="chkSelect3" />
                  Teeth No. 38
                  </label>
                  <div class="custom-select" id="content3" style="display:none">
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Erupted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Partially erupted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Impacted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Extracted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Missing</label>
                  </div>
                  </div>
              </aside>
              <aside class="col-sm-3">
                   <label for="chkSelect4">
                  <input type="checkbox" id="chkSelect4" name="48" value="1"/>
                  Teeth No. 48
                  </label>
                  <div class="custom-select" id="content4" style="display:none">
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Erupted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Partially erupted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Impacted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Extracted</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="class3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Missing</label>
                  </div>
                  </div>
              </aside>
              </div>
              <div class="row form-wrap">
                  <aside class="col-sm-6">
                    <div class="form-wrap mb0">
                      <label>Calculus</label>
                    </div>
                    <div class="">
                      <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="calculus1" id="class1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">+</label>
                      </div>
                      <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="calculus2" id="class2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">++</label>
                      </div>
                      <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="calculus3" id="class3" value="option3">
                      <label class="form-check-label" for="inlineRadio3">+++</label>
                      </div>
                    </div>
                  </aside>
                  <aside class="col-sm-6">
                    <div class="form-wrap mb0">
                      <label>Stains</label>
                    </div>
                    <div class="">
                      <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="stains1" id="class1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">+</label>
                      </div>
                      <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="stains2" id="class2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">++</label>
                      </div>
                      <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="stains3" id="class3" value="option3">
                      <label class="form-check-label" for="inlineRadio3">+++</label>
                      </div>
                    </div>
                  </aside>
                </div>
      
                <div class="form-wrap">
                <label for="hardTissue" class="form-label">Hard tissue findings</label>
                <input type="text" class="form-control" name="hardTissue" id="description" placeholder="">
                </div>
                <div class="form-wrap">
                <label for="softTissue" class="form-label">Soft tissue findings</label>
                <input type="text" class="form-control" name="softTissue" id="description" placeholder="">
                </div>
                <div class="form-wrap">
                <label for="observations" class="form-label">Other observations</label>
                <input type="text" class="form-control" name="observations" id="observations" placeholder="">
                </div>
          
          <button type="submit" class="btn btn-link back">Save</button>
        </form>
        </div> 
      </div>
    </div>
  </div>





  <!-- Modal Appointment -->
  <div class="modal fade" id="noteModal" tabindex="-1" role="dialog" aria-labelledby="noteModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered tab-work" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Note</h5>
      
        </div>
        <form method="POST" action="{{ route('emr_note') }}" >
        @csrf
        <div class="modal-body">

  
    <div class="form-row row">

      <div class="form-group col-md-4">
        <label for="inputCity"> Date</label>
        <input type="date" class="form-control" name="note_date" id="note_date">
      </div>
      <div class="form-group col-md-4">
        <label for="inputZip">Tooth Number</label>
        <input type="text" class="form-control" name="tooth_no" id="tooth_no">
      </div>
      <div class="form-group col-md-4">
        <label for="inputZip">Doctor</label>
        <select id="doc_type" name="doc_type" class="form-control">
            <option selected value="Resident Doctor">Resident Doctor</option>
          </select>
      </div>
    </div>
  
  
    <div class="form-row row">
      <div class="form-group col-md-6">
        <label for="inputState">Procedure</label>
        <input type="text" class="form-control" name="procedurenote" id="procedurenote" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="inputZip">Type</label>
        <input type="text" class="form-control" name="type" id="type">
        <input type="hidden" class="form-control ic mail" name="appo_id" id="appo_id"  value="{{$appointment_id}}" >
        <input type="hidden" class="form-control " name="branch" id="branch"  value="{{auth()->user()->branch}}" >	
      </div>
    </div>
  
    <div class="form-row row">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Clinical Notes</label>
        <input type="text" name="clinicalnotes" class="form-control" id="clinicalnotes" placeholder="">
      </div>
      <div class="form-group col-md-4 mt-4">
        <input class="form-check-input" type="radio" name="notetype" id="class1" value="1">
        <label class="form-check-label" for="inlineRadio1">Note Type: Regular</label>
      </div>

      <div class="form-group col-md-4">
        <label for="inputCity">Type of Complication</label>
        <input type="text" class="form-control" name="typecomp" id="typecomp" >

      </div>
    </div>

        </div>
        <div class="modal-footer">
          <button type="button" id="appointment_close" class="btn btn-secondary close" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
        </form>
      </div>
    </div>
  </div>



  <!-- Modal Appointment -->
  <div class="modal fade" id="secondModalCenter" tabindex="-1" role="dialog" aria-labelledby="secondModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered tab-work" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <form class="row g-3" method="post" action="{{ route('emr_plan') }}">
              @csrf				
      <div class="tret-lab-work">
          <div class="row form-wrap d-flex justify-content-between">
                      <div class='input-group date' id='obserDate'>					
                          <span class="input-group-addon input-group-text"><span class="fa fa-calendar"></span></span>
                          <input type='date' class="form-control" name="startDate" placeholder="Observation Date*" />
                      </div>
          </div>
          <div class="row form-wrap">	
                  <select id="inputState"  name="doctor" class="form-select">
                  <option value="gokul">gokul</option>
                  </select>
          </div>
              <div class="tooth-bx2">
                      <ul class="tabs">   <!-- Add tabs here -->
                          <li><a href="#tab4-2-8"><span>Permanent</span></a></li>
                          <li><a href="#tab4-2-9"><span>Deciduous</span></a></li>
                      </ul>
                      <div id="tab4-2-8">
                      <div class="row form-wrap tooth-bx">
              <aside class="col-sm-9">
                  <div class="tooth-bx-inner">
                      <div class="row">
                          <aside class="col-sm-6 brd-btm-rt tooth-bx-inner2">
                              <div class="md-button">
                                  <div class="md-icon teeth-18 "></div>
                                  <p>18</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-17 "></div>
                                  <p>17</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-16 "></div>
                                  <p>16</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-15"></div>
                                  <p>15</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-14 "></div>
                                  <p>14</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-13 "></div>
                                  <p>13</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-12 "></div>
                                  <p>12</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-11 "></div>
                                  <p>11</p>
                              </div>
                          </aside>
                          <aside class="col-sm-6  brd-btm tooth-bx-inner2">
                              <div class="md-button">
                                  <div class="md-icon teeth-21"></div>
                                  <p>21</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-22 "></div>
                                  <p>22</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-23 "></div>
                                  <p>23</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-24"></div>
                                  <p>24</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-25 "></div>
                                  <p>25</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-26 "></div>
                                  <p>26</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-27 "></div>
                                  <p>27</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-28 "></div>
                                  <p>28</p>
                              </div>
                              </aside>
                          <aside class="col-sm-6  brd-rt tooth-bx-inner2">
                              <div class="md-button btm">
                                  <p>48</p>
                                  <div class="md-icon teeth-48"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>47</p>
                                  <div class="md-icon teeth-47 "></div>
                              </div>
                              <div class="md-button btm">
                                  <p>46</p>
                                  <div class="md-icon teeth-46 "></div>
                              </div>
                              <div class="md-button btm">
                                  <p>45</p>
                                  <div class="md-icon teeth-45"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>44</p>
                                  <div class="md-icon teeth-44 "></div>
                              </div>
                              <div class="md-button btm">
                                  <p>43</p>
                                  <div class="md-icon teeth-43 "></div>
                              </div>
                              <div class="md-button btm">
                                  <p>42</p>
                                  <div class="md-icon teeth-42 "></div>
                              </div>
                              <div class="md-button btm">
                                  <p>41</p>
                                  <div class="md-icon teeth-41 "></div>
                              </div>
                              </aside>
                          <aside class="col-sm-6 tooth-bx-inner2">
                              <div class="md-button btm">
                                  <p>31</p>
                                  <div class="md-icon teeth-31"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>32</p>
                                  <div class="md-icon teeth-32 "></div>
                              </div>
                              <div class="md-button btm">
                                  <p>33</p>
                                  <div class="md-icon teeth-33 "></div>
                              </div>
                              <div class="md-button btm">
                                  <p>34</p>
                                  <div class="md-icon teeth-34"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>35</p>
                                  <div class="md-icon teeth-35 "></div>
                              </div>
                              <div class="md-button btm">
                                  <p>36</p>
                                  <div class="md-icon teeth-36"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>37</p>
                                  <div class="md-icon teeth-37"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>38</p>
                                  <div class="md-icon teeth-38 "></div>
                              </div>
                              </aside>
                      </div>
                      <h4 style="padding-top:10px">Selected:</h4>
                  </div>
              </aside>
              <aside class="col-sm-3">
              <div class="tooth-bx-rgt">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                      All Upper Tooth
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                      Full Mouth
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked>
                      <label class="form-check-label" for="flexCheckChecked2">
                      All Lower Tooth
                      </label>
                  </div>
              </div>
              </aside>
              </div>
                      </div>
                      <div id="tab4-2-9">
                      <div class="row form-wrap tooth-bx decid">
              <aside class="col-sm-9">
                  <div class="tooth-bx-inner">
                      <div class="row">
                          <aside class="col-sm-6 brd-btm-rt tooth-bx-inner2">
                              <div class="md-button">
                                  <div class="md-icon teeth-55"></div>
                                  <p>55</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-54"></div>
                                  <p>54</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-53"></div>
                                  <p>53</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-52"></div>
                                  <p>52</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-51"></div>
                                  <p>51</p>
                              </div>
                          </aside>
                          <aside class="col-sm-6  brd-btm tooth-bx-inner2">
                              <div class="md-button">
                                  <div class="md-icon teeth-61"></div>
                                  <p>61</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-62 "></div>
                                  <p>62</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-63 "></div>
                                  <p>63</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-64"></div>
                                  <p>64</p>
                              </div>
                              <div class="md-button">
                                  <div class="md-icon teeth-65 "></div>
                                  <p>65</p>
                              </div>
                              </aside>
                          <aside class="col-sm-6  brd-rt tooth-bx-inner2">
                              <div class="md-button btm">
                                  <p>85</p>
                                  <div class="md-icon teeth-85 teeth-on"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>84</p>
                                  <div class="md-icon teeth-84"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>83</p>
                                  <div class="md-icon teeth-83"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>82</p>
                                  <div class="md-icon teeth-82"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>81</p>
                                  <div class="md-icon teeth-81"></div>
                              </div>
                              </aside>
                          <aside class="col-sm-6 tooth-bx-inner2">
                              <div class="md-button btm">
                                  <p>71</p>
                                  <div class="md-icon teeth-71"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>72</p>
                                  <div class="md-icon teeth-72 "></div>
                              </div>
                              <div class="md-button btm">
                                  <p>73</p>
                                  <div class="md-icon teeth-73 "></div>
                              </div>
                              <div class="md-button btm">
                                  <p>74</p>
                                  <div class="md-icon teeth-74"></div>
                              </div>
                              <div class="md-button btm">
                                  <p>75</p>
                                  <div class="md-icon teeth-75 "></div>
                              </div>
                              </aside>
                      </div>
                      <h4 style="padding-top:10px">Selected:</h4>
                  </div>
              </aside>
              <aside class="col-sm-3">
              <div class="tooth-bx-rgt">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                      All Upper Tooth
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                      Full Mouth
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked>
                      <label class="form-check-label" for="flexCheckChecked2">
                      All Lower Tooth
                      </label>
                  </div>
              </div>
              </aside>
              </div>
                      </div>
              </div>			
                <div class="row form-wrap">
                  <label for="observation" class="form-label">Procedure</label>
                  <select id="observation" name="procedure" class="form-select">
                  <option value="test" >test</option>
                  </select>
          </div>

                <div class="row form-wrap">
                  <label for="notes" class="form-label">Type</label>
                  <select id="observation" name="type" class="form-select">
                    <option value="test" >test</option>
                    </select>
                  <input type="hidden" class="form-control teeth-18" name="teeth_18" value="" id="teeth-18" placeholder="">
                  <input type="hidden" class="form-control teeth-17" name="teeth_17" value="" id="teeth-17" placeholder="">
                  <input type="hidden" class="form-control teeth-16" name="teeth_16" value="" id="teeth-16" placeholder="">
                  <input type="hidden" class="form-control teeth-15" name="teeth_15" value="" id="teeth-15" placeholder="">
                  <input type="hidden" class="form-control teeth-14" name="teeth_14" value="" id="teeth-14" placeholder="">
                  <input type="hidden" class="form-control teeth-13" name="teeth_13" value="" id="teeth-13" placeholder="">
                  <input type="hidden" class="form-control teeth-12" name="teeth_12" value="" id="teeth-12" placeholder="">
                  <input type="hidden" class="form-control teeth-11" name="teeth_11" value="" id="teeth-11" placeholder="">
                  <input type="hidden" class="form-control teeth-21" name="teeth_21" value="" id="teeth-21" placeholder="">
                  <input type="hidden" class="form-control teeth-22" name="teeth_22" value="" id="teeth-22" placeholder="">
                  <input type="hidden" class="form-control teeth-23" name="teeth_23" value="" id="teeth-23" placeholder="">
                  <input type="hidden" class="form-control teeth-24" name="teeth_24" value="" id="teeth-24" placeholder="">
                  <input type="hidden" class="form-control teeth-25" name="teeth_25" value="" id="teeth-25" placeholder="">
                  <input type="hidden" class="form-control teeth-26" name="teeth_26" value="" id="teeth-26" placeholder="">
                  <input type="hidden" class="form-control teeth-27" name="teeth_27" value="" id="teeth-27" placeholder="">
                  <input type="hidden" class="form-control teeth-28" name="teeth_28" value="" id="teeth-28" placeholder="">
                  <input type="hidden" class="form-control teeth-48" name="teeth_48" value="" id="teeth-48" placeholder="">
                  <input type="hidden" class="form-control teeth-47" name="teeth_47" value="" id="teeth-47" placeholder="">
                  <input type="hidden" class="form-control teeth-46" name="teeth_46" value="" id="teeth-46" placeholder="">
                  <input type="hidden" class="form-control teeth-45" name="teeth_45" value="" id="teeth-45" placeholder="">
                  <input type="hidden" class="form-control teeth-44" name="teeth_44" value="" id="teeth-44" placeholder="">
                  <input type="hidden" class="form-control teeth-43" name="teeth_43" value="" id="teeth-43" placeholder="">
                  <input type="hidden" class="form-control teeth-42" name="teeth_42" value="" id="teeth-42" placeholder="">
                  <input type="hidden" class="form-control teeth-41" name="teeth_41" value="" id="teeth-41" placeholder="">
                  <input type="hidden" class="form-control teeth-31" name="teeth_31" value="" id="teeth-31" placeholder="">
                  <input type="hidden" class="form-control teeth-32" name="teeth_32" value="" id="teeth-32" placeholder="">
                  <input type="hidden" class="form-control teeth-33" name="teeth_33" value="" id="teeth-33" placeholder="">
                  <input type="hidden" class="form-control teeth-34" name="teeth_34" value="" id="teeth-34" placeholder="">
                  <input type="hidden" class="form-control teeth-35" name="teeth_35" value="" id="teeth-35" placeholder="">
                  <input type="hidden" class="form-control teeth-36" name="teeth_36" value="" id="teeth-36" placeholder="">
                  <input type="hidden" class="form-control teeth-37" name="teeth_37" value="" id="teeth-37" placeholder="">
                  <input type="hidden" class="form-control teeth-38" name="teeth_38" value="" id="teeth-38" placeholder="">
                  <input type="hidden" class="form-control ic mail" name="appo_id" id="appo_id"  value="{{$appointment_id}}" >
                  <input type="hidden" class="form-control " name="branch" id="branch"  value="{{auth()->user()->branch}}" >	
                  <input type="hidden" class="form-control teeth-55" name="teeth_55" value="" id="teeth-55" placeholder="">
                  <input type="hidden" class="form-control teeth-54" name="teeth_54" value="" id="teeth-54" placeholder="">
                  <input type="hidden" class="form-control teeth-53" name="teeth_53" value="" id="teeth-53" placeholder="">
                  <input type="hidden" class="form-control teeth-52" name="teeth_52" value="" id="teeth-52" placeholder="">
                  <input type="hidden" class="form-control teeth-51" name="teeth_51" value="" id="teeth-51" placeholder="">
                  <input type="hidden" class="form-control teeth-61" name="teeth_61" value="" id="teeth-61" placeholder="">
                  <input type="hidden" class="form-control teeth-62" name="teeth_62" value="" id="teeth-62" placeholder="">
                  <input type="hidden" class="form-control teeth-63" name="teeth_63" value="" id="teeth-63" placeholder="">
                  <input type="hidden" class="form-control teeth-64" name="teeth_64" value="" id="teeth-64" placeholder="">
                  <input type="hidden" class="form-control teeth-65" name="teeth_65" value="" id="teeth-65" placeholder="">
                  <input type="hidden" class="form-control teeth-85" name="teeth_85" value="" id="teeth-85" placeholder="">
                  <input type="hidden" class="form-control teeth-84" name="teeth_84" value="" id="teeth-84" placeholder="">
                  <input type="hidden" class="form-control teeth-83" name="teeth_83" value="" id="teeth-83" placeholder="">
                  <input type="hidden" class="form-control teeth-82" name="teeth_82" value="" id="teeth-82" placeholder="">
                  <input type="hidden" class="form-control teeth-81" name="teeth_81" value="" id="teeth-81" placeholder="">
                  <input type="hidden" class="form-control teeth-71" name="teeth_71" value="" id="teeth-71" placeholder="">
                  <input type="hidden" class="form-control teeth-72" name="teeth_72" value="" id="teeth-72" placeholder="">
                  <input type="hidden" class="form-control teeth-73" name="teeth_73" value="" id="teeth-73" placeholder="">
                  <input type="hidden" class="form-control teeth-74" name="teeth_74" value="" id="teeth-74" placeholder="">
                  <input type="hidden" class="form-control teeth-75" name="teeth_75" value="" id="teeth-75" placeholder="">

                </div>


                <div class="row form-wrap">
                  <label for="observation" class="form-label">Number of Teeth / Units*</label>
                  <input type="number" class="form-control" name="notu" id="notu" placeholder="">
          </div>
                <div class="row form-wrap">
                  <label for="notes" class="form-label">Discount</label>
                  <input type="text" class="form-control" name="dicount" id="discount" placeholder="">
                </div>
         
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary cancel" data-dismiss="modal"><img src="/assets/img/customimage/ic-close.png" alt=""> Cancel</button>
      <button type="submit" class="btn btn-primary save"><img src="/assets/img/customimage/ic-save.png" alt=""> Save</button>
  
  </div>
</form>
        
      </div>
    </div>
    </div>
  </div>





  <!-- Modal lab work -->
  <div class="modal fade" id="labModalCenter" tabindex="-1" role="dialog" aria-labelledby="labModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered tab-work" role="document">
         <form class="row g-3" method="post" action="{{ route('emr_lab') }}">
                    @csrf		
      <div class="modal-content">
        <div class="modal-body">	
      <div class="tret-lab-work">
        <div class="row form-wrap d-flex justify-content-between">
            <aside class="col-md-3">
              <div class='input-group date' id='startDate'>					
                <span class="input-group-addon input-group-text"><span class="fa fa-calendar"></span></span>
                <input type='date' class="form-control" name="orderdate" placeholder="Order Date*" />
              </div>
            </aside>
            <aside class="col-md-3">
              <div class='input-group date' id='startDate'>					
                <span class="input-group-addon input-group-text"><span class="fa fa-calendar"></span></span>
                <input type='date' class="form-control" name="completiondate" placeholder="Completion Date*" />
              </div>
            </aside>
        </div>
        <div class="row form-wrap">	
            <select id="inputState"  name="doctor"  class="form-select">
              @foreach($doctorlist as $doctorlists)
              <option value="{{ $doctorlists->doc_name }}">{{ $doctorlists->doc_name }}</option>
          @endforeach
            </select>
        </div>
        <div class="row form-wrap">	
            <select id="inputState" name="lab" class="form-select">
            <option selected>Lab*</option>
            <option>test</option>
            </select>
        </div>
          <div class="tooth-bx2">
        <div class="row form-wrap tooth-bx">
          <aside class="col-sm-9">
            <div class="tooth-bx-inner">
              <div class="row">
                <aside class="col-sm-6 brd-btm-rt tooth-bx-inner2">
                  <div class="md-button">
                    <div class="md-icon teeth-18"></div>
                    <p>18</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-17 "></div>
                    <p>17</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-16 "></div>
                    <p>16</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-15"></div>
                    <p>15</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-14 "></div>
                    <p>14</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-13 "></div>
                    <p>13</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-12 "></div>
                    <p>12</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-11 "></div>
                    <p>11</p>
                  </div>
                </aside>
                <aside class="col-sm-6  brd-btm tooth-bx-inner2">
                  <div class="md-button">
                    <div class="md-icon teeth-21"></div>
                    <p>21</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-22 "></div>
                    <p>22</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-23 "></div>
                    <p>23</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-24"></div>
                    <p>24</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-25 "></div>
                    <p>25</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-26 "></div>
                    <p>26</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-27 "></div>
                    <p>27</p>
                  </div>
                  <div class="md-button">
                    <div class="md-icon teeth-28 "></div>
                    <p>28</p>
                  </div>
                  </aside>
                <aside class="col-sm-6  brd-rt tooth-bx-inner2">
                  <div class="md-button btm">
                    <p>48</p>
                    <div class="md-icon teeth-48 teeth-on"></div>
                  </div>
                  <div class="md-button btm">
                    <p>47</p>
                    <div class="md-icon teeth-47 "></div>
                  </div>
                  <div class="md-button btm">
                    <p>46</p>
                    <div class="md-icon teeth-46 "></div>
                  </div>
                  <div class="md-button btm">
                    <p>45</p>
                    <div class="md-icon teeth-45"></div>
                  </div>
                  <div class="md-button btm">
                    <p>44</p>
                    <div class="md-icon teeth-44 "></div>
                  </div>
                  <div class="md-button btm">
                    <p>43</p>
                    <div class="md-icon teeth-43 "></div>
                  </div>
                  <div class="md-button btm">
                    <p>42</p>
                    <div class="md-icon teeth-42 "></div>
                  </div>
                  <div class="md-button btm">
                    <p>41</p>
                    <div class="md-icon teeth-41 "></div>
                  </div>
                  </aside>
                <aside class="col-sm-6 tooth-bx-inner2">
                  <div class="md-button btm">
                    <p>31</p>
                    <div class="md-icon teeth-31"></div>
                  </div>
                  <div class="md-button btm">
                    <p>32</p>
                    <div class="md-icon teeth-32 "></div>
                  </div>
                  <div class="md-button btm">
                    <p>33</p>
                    <div class="md-icon teeth-33 "></div>
                  </div>
                  <div class="md-button btm">
                    <p>34</p>
                    <div class="md-icon teeth-34"></div>
                  </div>
                  <div class="md-button btm">
                    <p>35</p>
                    <div class="md-icon teeth-35 "></div>
                  </div>
                  <div class="md-button btm">
                    <p>36</p>
                    <div class="md-icon teeth-36"></div>
                  </div>
                  <div class="md-button btm">
                    <p>37</p>
                    <div class="md-icon teeth-37"></div>
                  </div>
                  <div class="md-button btm">
                    <p>38</p>
                    <div class="md-icon teeth-38 "></div>
                  </div>
                  </aside>
              </div>
              <h4 style="padding-top:10px">Selected:</h4>
            </div>
          </aside>
          <aside class="col-sm-3">
          <div class="tooth-bx-rgt">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="upper"  value="on" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
              All Upper Tooth
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="on" name="full"  id="flexCheckChecked" checked>
              <label class="form-check-label" for="flexCheckChecked">
              Full Mouth
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="lower" value="on" id="flexCheckChecked2" checked>
              <label class="form-check-label" for="flexCheckChecked2">
              All Lower Tooth
              </label>
            </div>
          </div>
          </aside>
          </div>
        </div>
        <div class="row form-wrap d-flex justify-content-between">
            <aside class="col-md-5">
            <label for="noOfTeeth" class="form-label">Number of Teeth / Units</label>
            <input type="number" min="0" step="1" class="form-control" name="noteeth" id="amountInput">
            </aside>
            <aside class="col-md-5">
            <label for="procedure" class="form-label">Procedure</label>
            <select id="procedure" name="procedure" class="form-select">
            <option value="test">test</option>
            </select>
            </aside>
        </div>
            <div class="row form-wrap">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="">
            </div>
        <div class="row form-wrap d-flex justify-content-between">
            <aside class="col-md-5">
            <label for="costPer" class="form-label">Cost per Teeth / Unit (&#8377;)</label>
              <input type="text" class="form-control" name="costPer" id="costPer" placeholder="">
            </aside>
            <aside class="col-md-5">
            <label for="cost" class="form-label">Cost (&#8377;)</label>
              <input type="text" class="form-control" name="cost" id="cost" placeholder="">
            </aside>
        </div>
            <div class="row form-wrap">
            <label for="totalCost" class="form-label">Total Cost (&#8377;)</label>
            <input type="text" class="form-control" name="totalcost" id="totalCost" placeholder="">
            </div>
      <div class="row brd">			
      <aside class="col-sm-4">
        <div class="form-check form-switch med">
          <label class="form-check-label" for="flexSwitchCheckDefault">Occlusal/Incisal 1/3</label>
          <input class="form-check-input" type="checkbox" name="occlusal" value="on" role="switch" id="flexSwitchCheckDefault">
        </div>
      </aside>		
      <aside class="col-sm-4">
        <div class="form-check form-switch med">
          <label class="form-check-label" for="flexSwitchCheckDefault">Middle 1/3</label>
          <input class="form-check-input" type="checkbox" name="middle" value="on" role="switch" id="flexSwitchCheckDefault">
        </div>
      </aside>		
      <aside class="col-sm-4">
        <div class="form-check form-switch med">
          <label class="form-check-label" for="flexSwitchCheckDefault">Cervical 1/3</label>
          <input class="form-check-input" type="checkbox" name="cervical" value="on" role="switch" id="flexSwitchCheckDefault">
        </div>
      </aside>	
      </div>
            <div class="row form-wrap">
            <label for="splInstructions" class="form-label">Special Instructions</label>
            <input type="text" class="form-control" name="specialinstruction" value="on" id="splInstructions" placeholder="">
            </div>
      <label for="totalCost" class="form-label">Repeat</label>
      <div class="row enclose-blk">			
      <aside class="col-sm-4">
        <div class="form-check form-switch med">
          <label class="form-check-label" for="flexSwitchCheckDefault">Repeat</label>
          <input class="form-check-input" type="checkbox" name="repeat" value="on" role="switch" id="flexSwitchCheckDefault">
        </div>
      </aside>
      </div>
            <label for="totalCost" class="form-label">Trial Required</label>
      <div class="row enclose-blk">			
      <aside class="col-sm-4">
        <div class="form-check form-switch med">
          <label class="form-check-label" for="flexSwitchCheckDefault">Trial Required</label>
          <input class="form-check-input" type="checkbox" name="trial" value="on" role="switch" id="flexSwitchCheckDefault">
        </div>
      </aside>
      </div>
      <label for="enclosures" class="form-label">Enclosures</label>
      <div class="row enclose-blk">			
      <aside class="col-sm-4">
        <div class="form-check form-switch med">
          <label class="form-check-label" for="flexSwitchCheckDefault">Blood Pressure</label>
          <input class="form-check-input" type="checkbox" name="bp" value="on" role="switch" id="flexSwitchCheckDefault">
        </div>
      </aside>		
      <aside class="col-sm-4">
        <div class="form-check form-switch med">
          <label class="form-check-label" for="flexSwitchCheckDefault">Diabetes</label>
          <input class="form-check-input" type="checkbox" name="diabetes" value="on" role="switch" id="flexSwitchCheckDefault">
        </div>
      </aside>		
      <aside class="col-sm-4">
        <div class="form-check form-switch med">
          <label class="form-check-label" for="flexSwitchCheckDefault">Acidity/Ulcer</label>
          <input class="form-check-input" type="checkbox" name="acidity" value="on" role="switch" id="flexSwitchCheckDefault">
        </div>
      </aside>		
      <aside class="col-sm-4">
        <div class="form-check form-switch med">
          <label class="form-check-label" for="flexSwitchCheckDefault">Thyroid Problem</label>
          <input class="form-check-input" type="checkbox" name="thyroid" value="on" role="switch" id="flexSwitchCheckDefault">
        </div>
      </aside>		
      <aside class="col-sm-4">
        <div class="form-check form-switch med">
          <label class="form-check-label" for="flexSwitchCheckDefault">Heart Problem</label>
          <input class="form-check-input" type="checkbox" name="heart" value="on" role="switch" id="flexSwitchCheckDefault">
        </div>
      </aside>
      </div>
            <div class="row form-wrap">
            <label for="remark" class="form-label">Remark</label>
            <input type="text" class="form-control" name="remark" id="remark" placeholder="">
            <input type="hidden" class="form-control teeth-18" name="teeth_18" value="" id="teeth-18" placeholder="">
                        <input type="hidden" class="form-control teeth-17" name="teeth_17" value="" id="teeth-17" placeholder="">
                        <input type="hidden" class="form-control teeth-16" name="teeth_16" value="" id="teeth-16" placeholder="">
                        <input type="hidden" class="form-control teeth-15" name="teeth_15" value="" id="teeth-15" placeholder="">
                        <input type="hidden" class="form-control teeth-14" name="teeth_14" value="" id="teeth-14" placeholder="">
                        <input type="hidden" class="form-control teeth-13" name="teeth_13" value="" id="teeth-13" placeholder="">
                        <input type="hidden" class="form-control teeth-12" name="teeth_12" value="" id="teeth-12" placeholder="">
                        <input type="hidden" class="form-control teeth-11" name="teeth_11" value="" id="teeth-11" placeholder="">
                        <input type="hidden" class="form-control teeth-21" name="teeth_21" value="" id="teeth-21" placeholder="">
                        <input type="hidden" class="form-control teeth-22" name="teeth_22" value="" id="teeth-22" placeholder="">
                        <input type="hidden" class="form-control teeth-23" name="teeth_23" value="" id="teeth-23" placeholder="">
                        <input type="hidden" class="form-control teeth-24" name="teeth_24" value="" id="teeth-24" placeholder="">
                        <input type="hidden" class="form-control teeth-25" name="teeth_25" value="" id="teeth-25" placeholder="">
                        <input type="hidden" class="form-control teeth-26" name="teeth_26" value="" id="teeth-26" placeholder="">
                        <input type="hidden" class="form-control teeth-27" name="teeth_27" value="" id="teeth-27" placeholder="">
                        <input type="hidden" class="form-control teeth-28" name="teeth_28" value="" id="teeth-28" placeholder="">
                        <input type="hidden" class="form-control teeth-48" name="teeth_48" value="" id="teeth-48" placeholder="">
                        <input type="hidden" class="form-control teeth-47" name="teeth_47" value="" id="teeth-47" placeholder="">
                        <input type="hidden" class="form-control teeth-46" name="teeth_46" value="" id="teeth-46" placeholder="">
                        <input type="hidden" class="form-control teeth-45" name="teeth_45" value="" id="teeth-45" placeholder="">
                        <input type="hidden" class="form-control teeth-44" name="teeth_44" value="" id="teeth-44" placeholder="">
                        <input type="hidden" class="form-control teeth-43" name="teeth_43" value="" id="teeth-43" placeholder="">
                        <input type="hidden" class="form-control teeth-42" name="teeth_42" value="" id="teeth-42" placeholder="">
                        <input type="hidden" class="form-control teeth-41" name="teeth_41" value="" id="teeth-41" placeholder="">
                        <input type="hidden" class="form-control teeth-31" name="teeth_31" value="" id="teeth-31" placeholder="">
                        <input type="hidden" class="form-control teeth-32" name="teeth_32" value="" id="teeth-32" placeholder="">
                        <input type="hidden" class="form-control teeth-33" name="teeth_33" value="" id="teeth-33" placeholder="">
                        <input type="hidden" class="form-control teeth-34" name="teeth_34" value="" id="teeth-34" placeholder="">
                        <input type="hidden" class="form-control teeth-35" name="teeth_35" value="" id="teeth-35" placeholder="">
                        <input type="hidden" class="form-control teeth-36" name="teeth_36" value="" id="teeth-36" placeholder="">
                        <input type="hidden" class="form-control teeth-37" name="teeth_37" value="" id="teeth-37" placeholder="">
                        <input type="hidden" class="form-control teeth-38" name="teeth_38" value="" id="teeth-38" placeholder="">
                        <input type="hidden" class="form-control ic mail" name="appo_id" id="appo_id"  value="{{$appointment_id}}" >
                        <input type="hidden" class="form-control " name="branch" id="branch"  value="{{auth()->user()->branch}}" >	
            </div>
     
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary cancel" data-dismiss="modal"><img src="/assets/img/customimage/ic-close.png" alt=""> Cancel</button>
          <button type="submit" class="btn btn-primary save"><img src="/assets/img/customimage/ic-save.png" alt=""> Save</button>
        </div>
      </form>
      </div>
    </div>
    </div>
  </div>