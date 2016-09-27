<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Protech CMS : Evaluation</title> 
	 <?php $this->load->view('CMS/Links.php'); ?>

      
    </head>
    <?php  if($this->session->userdata('loggedIn') != true){redirect('Login');}   ?>
    <body>
        <!-- ---------------------------------sideBarLeft------ -->
        <div class="sideBarLeft">
            <?php $this->load->view('CMS/MainSideBar.php'); ?>
        </div>
        
        <!-- --------------------------------------Header----- -->
        <header>
            <?php require_once("MainHeader.php"); ?>
        </header>
        <!------------------------------------dataSection------>
        <div class="dataSection">
              <nav class="subTopBar">
                  <ul class="subTopBarList">
                      <li class="subTopBarItem">
                          <h1>Evaluation</h1>
                      </li>
                    
                   </ul>
             </nav>
              <div class="DataDiv Wide">
                          <div class="DataDiv">
                               <div class="box-wider-text">
                                    <div class="box-header">
                                        <div class="row CustomRow">
                                        <div class="HeaderLeft">
							<form class="TopBarForm">
                                <div class="form-group">
                                     <input type="search" class="form-control" name="Search" placeholder="Search By ClientName"/>
                                      <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
                                </div>
                          </form>    										
                                        </div>
                                        <div class="HeaderRight"> 
                                             <button class="btn btn-sucess" id="AddNewEvaluationbtn"> Add New Evaluation</button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                       <div class="table-responsive" id="UserTable">
                                            <table class='table table-hover table-condensed'>
                                                   <thead>
                                                        <tr>
                                                          <th>ID</th>
                                                          <th>Client Name</th>
                                                          <th>Date</th>
                                                          <th>Edit</th>
                                                          <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
<?php
if(isset($results))
{
  //`Slide_ID``Slide_Title``Slide_image`
foreach ($results as $object) {
echo "<tr><td>$object->id</td><td>$object->client_name</td><td>$object->evaluation_date</td>
<td class='check-col tableAdmin'><a href='#' onclick='SetEditData($object->id)' class='editeBtn'  id='EditEvaluationbtn' data-placement='right'><span class='fa fa-gear'></span></a></td>
<td class='check-col tableAdmin'><a href='#' onclick='SetSlideID($object->id)' class='deleteBtn' data-target='#DeleteEvaluation' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td>
</tr>";
}
}
?>
                                                    </tbody>
                                             </table>
                                      </div>
                                    </div>
                                    <div class="box-footer">
                                         <div class="row CustomRow">
                                              <nav>
                                                <ul class="pagination">
                                                  <li>
                                                    <a href="#" aria-label="Previous">
                                                      <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                  </li>
                                                  <li><a href="#">1</a></li>
                                                  <li><a href="#">2</a></li>
                                                  <li><a href="#">3</a></li>
                                                  <li><a href="#">4</a></li>
                                                  <li><a href="#">5</a></li>
                                                  <li>
                                                    <a href="#" aria-label="Next">
                                                      <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                  </li>
                                                </ul>
                                              </nav>
                                         </div>
                                    </div>
                               </div>
                          </div>
              </div>
        </div>

        <!-----------------------------------sideBarRight------>
        <nav class="sideBarRight"></nav>

        <!-----------------------------------------footer------>
        <footer></footer>

        <!-----------------------------------OverLayForms---- -->

        <!----AddNewEvaluation------------------- -->
        <div class="OverLayForm closed chart" id="AddNewEvaluationOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <span class="fa fa-close ExitBtn"></span>
                   </div>
                   <div class="OverLayFormHeaderRight">
                        <h2>استبيان قياس رضا العملاء وتقييم الآداء </h2>
                   </div>
               </div>
          </div>
<form method="POST" action="<?=base_url()?>index.php/EvaluationCMS/Add" id="AddSlideShowForm" enctype="">
              <div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                          
                       </div>
                      <div class="SectionContent row">
                        <div class="form-group formLayout col-md-6">
                          <label for="Title" class="control-label ">التاريخ : </label>
                          <input type="date" name="EvDate" class="form-control" placeholder=" التاريخ"/>
                       </div>
					   <div class="form-group formLayout col-md-6">
                <label for="CustomerNAme" class="control-label ">إسم العميل : </label>
                <input type="text" name="CustName" class="form-control" placeholder=" إسم العميل" />
            </div>
                      	
                      </div>
                   </div>
                    <div class="FormSection chart">
                       <div class="SectionHeader">
                           <h3> الإنطباع العام عن الشركة</h3>
                       </div>
                       <div class="SectionContent row">
					   <div class="form-group formLayout col-md-4">
                        <div class="radio radiochart">
                            <label>     سهولة الاتصال بالشركة عبر الهاتف وعبر البريد الالكتروني </label><br>
                         
                            <input type="radio" name="OR1" id="optionsRadios2" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="OR1" id="optionsRadios3" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="OR1" id="optionsRadios4" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="OR1" id="optionsRadios5" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="OR1" id="optionsRadios6" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>     المرونة في التعامل وفي اوقات تقديم الخدمات </label><br>
                         
                            <input type="radio" name="OR2" id="optionsRadios7" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="OR2" id="optionsRadios8" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="OR2" id="optionsRadios9" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="OR2" id="optionsRadios10" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="OR2" id="optionsRadios11" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                   		   <div class="form-group formLayout col-md-4">
                        <div class="radio radiochart">
                            <label> الآهتمام والتفهم الذي يبدية موظفو الشركة تجاه العملاء </label><br>
                         
                            <input type="radio" name="OR3" id="optionsRadios12" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="OR3" id="optionsRadios13" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="OR3" id="optionsRadios14" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="OR3" id="optionsRadios15" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="OR3" id="optionsRadios16" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                      </div>
                   </div>
                      <div class="FormSection chart">
                       <div class="SectionHeader">
                           <h3> الآنطباع العام عن المهندس</h3>
                       </div>
                       <div class="SectionContent row">
                           <div class="col-md-4"></div>
					   <div class="form-group formLayout col-md-4">
                        <div class="radio radiochart">
                            <label>      الآهتمام بالمظهر الشخصي  </label><br>
                         
                            <input type="radio" name="OR4" id="optionsRadios17" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="OR4" id="optionsRadios18" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="OR4" id="optionsRadios19" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="OR4" id="optionsRadios20" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="OR4" id="optionsRadios21" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>  حسن الخلق والتصرف في التعامل مع العميل</label><br>
                         
                            <input type="radio" name="OR5" id="optionsRadios22" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="OR5" id="optionsRadios23" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="OR5" id="optionsRadios24" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="OR5" id="optionsRadios25" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="OR5" id="optionsRadios26" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                   
                      </div>
                       <div class="FormSection chart">
                       <div class="SectionHeader">
                           <h3>  الانطباع العام عن تقديم الخدمة</h3>
                       </div>
                       <div class="SectionContent row">
                           
					   <div class="form-group formLayout col-md-4">
                        <div class="radio radiochart">
                            <label>  سرعة التلبية للمهندس والاستجابة للبلاغ </label><br>
                         
                            <input type="radio" name="OR6" id="optionsRadios27" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="OR6" id="optionsRadios28" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="OR6" id="optionsRadios29" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="OR6" id="optionsRadios30" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="OR6" id="optionsRadios31" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>   كفاءة المهندس وقدرته علي انجاز المهمة</label><br>
                         
                            <input type="radio" name="OR7" id="optionsRadios32" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="OR7" id="optionsRadios33" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="OR7" id="optionsRadios34" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="OR7" id="optionsRadios35" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="OR7" id="optionsRadios36" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                        <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>   الآلتزام بتوفير قطع الغيار اللازمة في اسرع وقت </label><br>
                         
                            <input type="radio" name="OR8" id="optionsRadios37" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="OR8" id="optionsRadios38" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="OR8" id="optionsRadios39" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="OR8" id="optionsRadios40" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="OR8" id="optionsRadios41" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                      </div>
                   </div>
                          
                   </div>
                      <div class="FormSection">
                       <div class="SectionHeader">
                           <h3>الملاحظات و الإقتراحات</h3>
                       </div>
                       <div class="SectionContent row">
               <div class="form-group formLayout col-md-6">
                  <label for="telephone" class="control-label ">رقم الهاتف : </label>
                  <input type="text" name="telephone" class="form-control" placeholder=" رقم الهاتف" />
                </div>
					     <div class="form-group formLayout col-md-6">
                <label for="Name" class="control-label ">الإسم : </label>
                <input type="text" name="CommenterName" class="form-control" placeholder=" إسم العميل" />
               </div>
                      
                           <div class="col-md-6"></div>
                      <div class="form-group formLayout col-md-6">
                            <label for="note" class="control-label ">الملاحظة: </label>
                            <textarea col="50" name="Comment"></textarea>
                        </div>
             
            
                      </div>
                   </div>
                          
                   </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="submit"class="btn btn-md ">أضف</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!----EditEvaluation------------------- -->
 <div class="OverLayForm closed chart" id="EditEvaluationOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <span class="fa fa-close ExitBtn"></span>
                   </div>
                   <div class="OverLayFormHeaderRight">
                        <h2>استبيان قياس رضا العملاء وتقييم الآداء </h2>
                   </div>
               </div>
          </div>
          <form method="POST" action="<?=base_url()?>index.php/EvaluationCMS/Update" id="AddSlideShowForm" enctype="">
              <div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                          
                       </div>
                       <div class="SectionContent row">
                         <div class="form-group formLayout col-md-6">
                            <label for="Title" class="control-label ">التاريخ : </label>
                            <input type="date" name="EDate" id="EDate" class="form-control" placeholder=" التاريخ" />
                        </div>
					   <div class="form-group formLayout col-md-6">
                            <label for="CustomerNAme" class="control-label ">إسم العميل : </label>
                            <input type="text" name="ECustName" id="ECustName" class="form-control" placeholder=" إسم العميل" />
                        </div>
                      	
                      </div>
                   </div>
                    <div class="FormSection chart">
                       <div class="SectionHeader">
                           <h3> الإنطباع العام عن الشركة</h3>
                       </div>
                       <div class="SectionContent row">
					   <div class="form-group formLayout col-md-4">
                        <div class="radio radiochart">
                            <label>     سهولة الاتصال بالشركة عبر الهاتف وعبر البريد الالكتروني </label><br>
                         
                            <input type="radio" name="EOR1" id="optionsRadios2" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="EOR1" id="optionsRadios3" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="EOR1" id="optionsRadios4" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="EOR1" id="optionsRadios5" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="EOR1" id="optionsRadios6" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>     المرونة في التعامل وفي اوقات تقديم الخدمات </label><br>
                         
                            <input type="radio" name="EOR2" id="optionsRadios7" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="EOR2" id="optionsRadios8" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="EOR2" id="optionsRadios9" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="EOR2" id="optionsRadios10" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="EOR2" id="optionsRadios11" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                   		   <div class="form-group formLayout col-md-4">
                        <div class="radio radiochart">
                            <label> الآهتمام والتفهم الذي يبدية موظفو الشركة تجاه العملاء </label><br>
                         
                            <input type="radio" name="EOR3" id="optionsRadios12" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="EOR3" id="optionsRadios13" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="EOR3" id="optionsRadios14" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="EOR3" id="optionsRadios15" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="EOR3" id="optionsRadios16" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                      </div>
                   </div>
                      <div class="FormSection chart">
                       <div class="SectionHeader">
                           <h3> الآنطباع العام عن المهندس</h3>
                       </div>
                       <div class="SectionContent row">
                           <div class="col-md-4"></div>
					   <div class="form-group formLayout col-md-4">
                        <div class="radio radiochart">
                            <label>      الآهتمام بالمظهر الشخصي  </label><br>
                         
                            <input type="radio" name="EOR4" id="optionsRadios17" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="EOR4" id="optionsRadios18" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="EOR4" id="optionsRadios19" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="EOR4" id="optionsRadios20" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="EOR4" id="optionsRadios21" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>  حسن الخلق والتصرف في التعامل مع العميل</label><br>
                         
                            <input type="radio" name="EOR5" id="optionsRadios22" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="EOR5" id="optionsRadios23" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="EOR5" id="optionsRadios24" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="EOR5" id="optionsRadios25" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="EOR5" id="optionsRadios26" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                   
                      </div>
                       <div class="FormSection chart">
                       <div class="SectionHeader">
                           <h3>  الانطباع العام عن تقديم الخدمة</h3>
                       </div>
                       <div class="SectionContent row">
                           
					   <div class="form-group formLayout col-md-4">
                        <div class="radio radiochart">
                            <label>  سرعة التلبية للمهندس والاستجابة للبلاغ </label><br>
                         
                            <input type="radio" name="EOR6" id="optionsRadios27" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="EOR6" id="optionsRadios28" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="EOR6" id="optionsRadios29" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="EOR6" id="optionsRadios30" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="EOR6" id="optionsRadios31" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>   كفاءة المهندس وقدرته علي انجاز المهمة</label><br>
                         
                            <input type="radio" name="EOR7" id="optionsRadios32" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="EOR7" id="optionsRadios33" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="EOR7" id="optionsRadios34" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="EOR7" id="optionsRadios35" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="EOR7" id="optionsRadios36" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                        <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>   الآلتزام بتوفير قطع الغيار اللازمة في اسرع وقت </label><br>
                         
                            <input type="radio" name="EOR8" id="optionsRadios37" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="EOR8" id="optionsRadios38" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="EOR8" id="optionsRadios39" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="EOR8" id="optionsRadios40" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="EOR8" id="optionsRadios41" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                      </div>
                   </div>
                          
                   </div>
                      <div class="FormSection">
                       <div class="SectionHeader">
                           <h3>الملاحظات و الإقتراحات</h3>
                       </div>
                       <div class="SectionContent row">
                             <div class="form-group formLayout col-md-6">
                            <label for="telephone" class="control-label ">رقم الهاتف : </label>
                            <input type="text" name="Etelephone" id="ETele" class="form-control" placeholder=" رقم الهاتف" />
                        </div>
					      <div class="form-group formLayout col-md-6">
                            <label for="Name" class="control-label ">الإسم : </label>
                            <input type="text" name="EName" id="EMName" class="form-control" placeholder=" إسم العميل" />
                        </div>
                      
                           <div class="col-md-6"></div>
                      <div class="form-group formLayout col-md-6">
                            <label for="note" class="control-label ">الملاحظة: </label>
                            <textarea id ="ENotice" name="Ecomment" col="50"></textarea>
                        </div>
                      
              <input type="hidden" name="EID" id="EID" class="form-control" readonly="" />
                      
            
                      </div>
                   </div>
                          
                   </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="submit"class="btn btn-md "> تعديل</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>
        <!------------------------------------DeleteModals---- -->
    
        <div class="modal fade CustomModal" id="DeleteEvaluation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post" action="<?=base_url()?>index.php/EvaluationCMS/Delete" >
                  <div class="modal-body">
                        <h1>Delete Evaluation</h1>
                        <p>Are you sure that you need to delete this Data ?</p>
                        <div class="form-group formLayout">
		        			 <input type="hidden" name="RecoredId" id="RecoredId" class="form-control"  readonly />
	       				</div>
                  </div>
                  <div class="modal-footer">
                        <button type="submit" class="btn customBtn"> Delete</button>
                  </div>
              </form>
            </div>
          </div>
        </div>

    <!----------------------------------------scripts------>
       <script src="<?php echo base_url();?>js/cms/js/jquery-1.12.1.min.js"></script>
       <script src="<?php echo base_url();?>js/cms/js/jquery-ui.min.js"></script>
       <script src="<?php echo base_url();?>js/cms/js/jquery.validate.min.js"></script>
       <script src="<?php echo base_url();?>js/cms/js/bootstrap.min.js"></script>
       <script src="<?php echo base_url();?>js/cms/js/ProjectScripts.js"></script>
       <script src="<?php echo base_url();?>js/cms/js/test.js"></script>

       <script type="text/javascript">
       function SetSlideID(id)
       {
          console.log("reached");
          var ID=id;
          document.getElementById("RecoredId").value=ID;
       }
       function SetEditData(id)
       {
        //EDate
        //ECustName
        var ID=id;
          $.post('EvaluationCMS/GetEditedData',{ID:ID},function(data)
          {
            console.log(data);
            $('#EDate').val(data.evaluation_date);
            $('#ECustName').val(data.client_name);
            $("input[name=EOR1][value=" + data.general_contact + "]").prop('checked', true);
            $("input[name=EOR2][value=" + data.general_elasticity + "]").prop('checked', true);
            $("input[name=EOR3][value=" + data.general_care + "]").prop('checked', true);
            $("input[name=EOR4][value=" + data.engineer_look + "]").prop('checked', true);
            $("input[name=EOR5][value=" + data.engineer_behavior + "]").prop('checked', true);
            $("input[name=EOR6][value=" + data.service_speed + "]").prop('checked', true);
            $("input[name=EOR7][value=" + data.service_quality + "]").prop('checked', true);
            $("input[name=EOR8][value=" + data.service_parts + "]").prop('checked', true);
            $('#ETele').val(data.commenter_phone);
            $('#EMName').val(data.commenter_name);
            $('#ENotice').val(data.comment);
            $('#EID').val(data.id);
          },'json');
      }
    </script>
    </body>
</html>
