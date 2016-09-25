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
                                                        <tr>
                                                            <td>1</td>
                                                            <td>mohamed</td>
                                                            <td>20-10-2016</td>
                                                            <td class='check-col tableAdmin'><a href='#' class='editeBtn' id="EditEvaluationbtn" data-placement='right'><span class='fa fa-gear'></span></a></td>
                                                          <td class='check-col tableAdmin'><a href='#' class='deleteBtn'  data-target='#DeleteEvaluation' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td>
                                                        </tr>
                                                  
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
          <form method="POST" action="#" id="AddSlideShowForm" enctype="">
              <div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                          
                       </div>
                       <div class="SectionContent row">
                         <div class="form-group formLayout col-md-6">
                            <label for="Title" class="control-label ">التاريخ : </label>
                            <input type="text" name="Title" class="form-control" placeholder=" التاريخ" />
                        </div>
					   <div class="form-group formLayout col-md-6">
                            <label for="CustomerNAme" class="control-label ">إسم العميل : </label>
                            <input type="text" name="CustomerNAme" class="form-control" placeholder=" إسم العميل" />
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
                         
                            <input type="radio" name="optionsRadios1" id="optionsRadios2" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios1" id="optionsRadios3" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios1" id="optionsRadios4" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios1" id="optionsRadios5" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios1" id="optionsRadios6" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>     المرونة في التعامل وفي اوقات تقديم الخدمات </label><br>
                         
                            <input type="radio" name="optionsRadios2" id="optionsRadios7" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios2" id="optionsRadios8" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios2" id="optionsRadios9" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios2" id="optionsRadios10" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios2" id="optionsRadios11" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                   		   <div class="form-group formLayout col-md-4">
                        <div class="radio radiochart">
                            <label> الآهتمام والتفهم الذي يبدية موظفو الشركة تجاه العملاء </label><br>
                         
                            <input type="radio" name="optionsRadios3" id="optionsRadios12" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios3" id="optionsRadios13" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios3" id="optionsRadios14" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios3" id="optionsRadios15" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios3" id="optionsRadios16" value="bad" >
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
                         
                            <input type="radio" name="optionsRadios4" id="optionsRadios17" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios4" id="optionsRadios18" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios4" id="optionsRadios19" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios4" id="optionsRadios20" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios4" id="optionsRadios21" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>  حسن الخلق والتصرف في التعامل مع العميل</label><br>
                         
                            <input type="radio" name="optionsRadios5" id="optionsRadios22" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios5" id="optionsRadios23" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios5" id="optionsRadios24" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios5" id="optionsRadios25" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios5" id="optionsRadios26" value="bad" >
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
                         
                            <input type="radio" name="optionsRadios6" id="optionsRadios27" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios6" id="optionsRadios28" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios6" id="optionsRadios29" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios6" id="optionsRadios30" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios6" id="optionsRadios31" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>   كفاءة المهندس وقدرته علي انجاز المهمة</label><br>
                         
                            <input type="radio" name="optionsRadios7" id="optionsRadios32" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios7" id="optionsRadios33" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios7" id="optionsRadios34" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios7" id="optionsRadios35" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios7" id="optionsRadios36" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                        <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>   الآلتزام بتوفير قطع الغيار اللازمة في اسرع وقت </label><br>
                         
                            <input type="radio" name="optionsRadios8" id="optionsRadios37" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios8" id="optionsRadios38" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios8" id="optionsRadios39" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios8" id="optionsRadios40" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios8" id="optionsRadios41" value="bad" >
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
                            <input type="text" name="Name" class="form-control" placeholder=" إسم العميل" />
                        </div>
                      
                           <div class="col-md-6"></div>
                      <div class="form-group formLayout col-md-6">
                            <label for="note" class="control-label ">الملاحظة: </label>
                            <textarea col="50"></textarea>
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
          <form method="POST" action="#" id="AddSlideShowForm" enctype="">
              <div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                          
                       </div>
                       <div class="SectionContent row">
                         <div class="form-group formLayout col-md-6">
                            <label for="Title" class="control-label ">التاريخ : </label>
                            <input type="text" name="Title" class="form-control" placeholder=" التاريخ" />
                        </div>
					   <div class="form-group formLayout col-md-6">
                            <label for="CustomerNAme" class="control-label ">إسم العميل : </label>
                            <input type="text" name="CustomerNAme" class="form-control" placeholder=" إسم العميل" />
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
                         
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios3" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios" id="optionsRadios4" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios" id="optionsRadios5" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios6" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>     المرونة في التعامل وفي اوقات تقديم الخدمات </label><br>
                         
                            <input type="radio" name="optionsRadios" id="optionsRadios7" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios8" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios" id="optionsRadios9" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios" id="optionsRadios10" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios11" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                   		   <div class="form-group formLayout col-md-4">
                        <div class="radio radiochart">
                            <label> الآهتمام والتفهم الذي يبدية موظفو الشركة تجاه العملاء </label><br>
                         
                            <input type="radio" name="optionsRadios" id="optionsRadios12" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios13" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios" id="optionsRadios14" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios" id="optionsRadios15" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios16" value="bad" >
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
                         
                            <input type="radio" name="optionsRadios" id="optionsRadios17" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios18" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios" id="optionsRadios19" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios" id="optionsRadios20" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios21" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>  حسن الخلق والتصرف في التعامل مع العميل</label><br>
                         
                            <input type="radio" name="optionsRadios" id="optionsRadios22" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios23" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios" id="optionsRadios24" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios" id="optionsRadios25" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios26" value="bad" >
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
                         
                            <input type="radio" name="optionsRadios" id="optionsRadios27" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios28" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios" id="optionsRadios29" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios" id="optionsRadios30" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios31" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                       <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>   كفاءة المهندس وقدرته علي انجاز المهمة</label><br>
                         
                            <input type="radio" name="optionsRadios" id="optionsRadios32" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios33" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios" id="optionsRadios34" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios" id="optionsRadios35" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios36" value="bad" >
                               <label class="dataradio">  سئ </label><br>
                        </div>
                           
                        </div>
                        <div class="form-group formLayout col-md-4"> 
                        <div class="radio radiochart">
                            <label>   الآلتزام بتوفير قطع الغيار اللازمة في اسرع وقت </label><br>
                         
                            <input type="radio" name="optionsRadios" id="optionsRadios37" value="Excellent" >
                               <label class="dataradio">  ممتاز   </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios38" value="verygood" >
                               <label class="dataradio">  جيد جدا   </label><br>
                             <input type="radio" name="optionsRadios" id="optionsRadios39" value="good" >
                               <label class="dataradio">  جيد </label><br>
                              <input type="radio" name="optionsRadios" id="optionsRadios40" value="accepted" >
                               <label class="dataradio">  مقبول </label><br>
                               <input type="radio" name="optionsRadios" id="optionsRadios41" value="bad" >
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
                            <input type="text" name="Name" class="form-control" placeholder=" إسم العميل" />
                        </div>
                      
                           <div class="col-md-6"></div>
                      <div class="form-group formLayout col-md-6">
                            <label for="note" class="control-label ">الملاحظة: </label>
                            <textarea col="50"></textarea>
                        </div>
             
            
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
              <form id="ForgotPassForm" method="post" action="<?=base_url()?>index.php/SlideShow/Delete" >
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


    </body>
</html>
