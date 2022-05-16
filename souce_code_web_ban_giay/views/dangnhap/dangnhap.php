<div class="tab-products single-products section-padding extra-padding-top">
    <div class="container">


        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <div class="product-tab">
                        <ul>
                            <li class="active dangnhap"><a data-toggle="tab" href="#arrival">ĐĂNG NHẬP<span>/</span></a></li>
                            <li class="dangky"><a data-toggle="tab" href="#popular"><span>/</span>ĐĂNG KÝ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <div class="text-center tab-content">
            <div class="tab-pane  fade in active" id="arrival">
                <div class="wrapper">
                    <ul class="load-list load-list-two">
                       



                        <li>
                            <div class="row text-center">
                      


                               <div class="container-fluid"> 


         


                                <div class="row-fluid"> 
                                 <div class="col-md-offset-4 col-md-4" id="box"> 
                                  <h2><br>Đăng nhập</h2> 
                                  <hr> 
                                  <form class="form-horizontal" action="?action=dangnhap_xl" method="POST" id="login_form"> 
                                   <fieldset> 
                                    <div class="form-group"> 
                                     <div class="col-md-12"> 
                                      <div class="input-group"> 
                                        <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                        </span>



                                     <!--  <input name="first_name" placeholder="Username" class="form-control" type="text"> -->
                                       <td><input type="text" name="tendangnhap_dn" class="form-control" required></td> 



                                      </div> 
                                     </div> 
                                    </div> 
                                    <div class="form-group"> 
                                     <div class="col-md-12"> 
                                      <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 



                                         <!-- <input name="email" placeholder="Password" class="form-control" type="text"> -->
                                      <td><input type="password" name="matkhau_dn" class="form-control" required></td>





                                      </div> 
                                     </div> 
                                    </div> 
                                    <div class="form-group"> 
                                     <div class="col-md-12"> 

                                       <center>  
                                       <input type="submit" name="submit" class="btn btn-md btn-danger" value="Đăng nhập">
                                    </center>
      
                                     </div> 
                                    </div> 
                                   </fieldset> 
                                  </form> 
                                   <div class="text-center">
                                    <a data-toggle="tab" href="#popular" class="tk">Đăng ký tài khoản? </a>
                                    
                                    <a href="?action=quenmatkhau" class="tk">Quên mật khẩu?</a>

                                    </div>
                                 </div> 

                                </div>
                               </div>








                            </div>
                        </li>
                     
                    </ul>
                </div>
            </div>













            <!-- arrival product end -->
            <div class="tab-pane fade" id="popular">
                <div class="wrapper">
                    <ul class="load-list load-list-three">
                      
                        <li>
                            <div class="row text-center">


                        <div class="container"> 



                         <div class="roww"> 
                          <div class="onee" style="background-color: lightgray;"> 
                           <legend class="dangkythanhvien"><a>
                            <br>
                            <i class="glyphicon glyphicon-globe"></i></a>
                             Đăng ký thành viên!
                             <br>
                             <br>
                           </legend> 

                           <form action="?action=dangky_xl" method="POST" class="form" role="form" onsubmit="return validate()"> 
                        
                          <div class="col-sm-4">
                            <input class="form-control" type="text" name="ho_dk" placeholder="Họ" required>

                            <input class="form-control" type="text" name="ten_dk" placeholder="Tên" required>
                              <div class="pull-left" style="color:gray;font-size: 15px;">
                              Giới tính:
                            <input type="radio" name="gioitinh_dk" value="nam" checked> Nam
                             <input type="radio" name="gioitinh_dk" value="nu"> Nữ
                           </div>
                          </div>


                          <div class="col-sm-4">


                             <input class="form-control" type="text" name="diachi_dk" placeholder="địa chỉ" required>
                             <input class="form-control" type="text" name="email_dk" placeholder="Email" required>

                           <input class="form-control" type="text" name="sdt_dk" placeholder="Số điện thoại" required>
                           
                          </div>

                          <div class="col-sm-4">

                            <!--  <input class="form-control" name="youremail" placeholder="Email" type="email">   -->
                             <input class="form-control" type="text" name="tendangnhap_dk" placeholder="Tên đăng nhập" required>

                            <!-- <input class="form-control" name="password" placeholder="Mật khẩu" type="password">   -->
                            <input id="mk1" class="form-control" type="password" name="matkhau_dk" placeholder="Mật khẩu" required>

                            <!--  <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">  --> 
                            <input id="mk2" class="form-control" type="password" name="" placeholder="Nhập lại mật khẩu" required>
                          </div>
   

    

                           <!--  <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button>  -->

                                  <button class="btn btn-lg btn-primary btn-block button2" type="submit" name="submit">Đăng ký</button>

                           <!--        <button class="btn btn-lg btn-primary btn-block button2" type="reset">Làm mới</button>   -->

                           </form> 


                           <div class="text-center">
                            <br>
                            <span> Bạn đã có tài khoản? </span>
                            <a class="dn" data-toggle="tab" href="#arrival"style="color:gray;">Đăng nhập</a> </div>
                          </div> 
                          </div> 
                         </div>
                        </div>



      
                                  
                       
                            </div>
                        </li>
                      
                       
                    </ul>
                </div>
            </div>
            <!-- popular product end -->




                                </div>
                            </div>
                        </div>
                        



</section>

<script>
    function validate() {
      var n1 = document.getElementById("mk1");
      var n2 = document.getElementById("mk2");
      if(n1.value != "" && n2.value != "") {
        if(n1.value == n2.value) {
          return true;
        }
      }
      alert("Mật khẩu không khớp với nhau. Hãy nhập lại Mật khẩu!");
      return false;
    }
</script>