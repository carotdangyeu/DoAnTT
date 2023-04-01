                <section class="navigation-menu clearfix">
                	<div class="container" style="width:1150px;">
                		<nav class="navbar nav-menu hidden-xs">
                       <div class="navbar-header">
                         <a class="navbar-brand logo" href="index.php">
                           <img alt="Logo" class="img-responsive" src="Uploads/shop264/images/logo.png">
                        </a>
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                        data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                  </div>
                  <nav id="mobile-menu" class="mobile-menu collapse navbar-collapse">
                   <ul class='menu nav navbar-nav'>
                     <li class="level0"><a class='' href='index.php'><span>Trang chủ</span></a></li>
                     <li class="level0"><a class='' href='index.php?content=gioithieu'><span>Giới thiệu</span></a></li>
                     <li class="level0"><a class='' href='index.php?content=sanpham'><span>Sản phẩm</span></a></li>
                     <li class="level0"><a class='' href='index.php?content=khuyenmai'><span>Khuyến mãi</span></a></li>
                     <li class="level0"><a class='' href='index.php?content=tintuc'><span>Tin tức</span></a></li>
                     <li class="level0"><a class='' href='index.php?content=lienhe'><span>Liên hệ</span></a></li>
                  </ul class='menu nav navbar-nav'>
               </nav>
            </nav>


            <div class="row">
             <div class="header-bottom clearfix">
                <div class="header-bottom-content">
                   <div class="header-bottom-block">
                      <div class="col-md-3">
                        <div class="menu-cate hidden-xs">
                           <div class="menu-cate-title" style="height: 44px;">
                              <span><i class="fa fa-bars"></i><a href="index.php?content=sanpham">Danh mục sản phẩm</a></span>
                              <i class="fa fa-angle-down"></i>
                           </div>
                           <ul class="menu-cate-content">
                              <?php 
                              $sql="select * from danhmuc where dequi=1";
                              $result=mysqli_query(mysqli_connect("localhost","root","","oto"),$sql);
                              while($row=mysqli_fetch_array($result)){
                                 ?>
                                 <li>
                                    <a href="index.php?madm=<?php echo $row['madm'] ?>">
                                       <i class="icon-menu fa"></i>
                                       <?php echo $row["tendm"];?>
                                    </a>
                                 </li>
                              <?php } ?>
                           </div>
                        </div>



                        <div class="col-md-9 search-form hidden-xs hidden-sm">
                         <div class="search hidden-sm hidden-xs">
                           <div class="input-cat form-search clearfix">
                              <form action="index.php?content=timkiem" method="GET">
                                 <div class="form-search-controls">
                                    <input type="hidden" name="content" value="timkiem">
                                    <input type="text" name="timkiem" id="txtsearch"
                                    placeholder="Tìm kiếm..." style="width: 70%;height: 34px; float: left;" />
                                    <select name="gia" style="width: 24%;height: 34px; margin-left: 2px">
                                     <option value="0"> - Chọn giá - </option>
                                     <option value="1">  < 100.000.000</option>
                                     <option value="2">100.000.000 - 300.000.000</option>
                                     <option value="3">300.000.000 - 500.000.000</option>
                                     <option value="4">500.000.000 - 800.000.000</option>
                                     <option value="5">800.000.000 - 1.000.000.000</option>
                                     <option value="6"> > 1.000.000.000</option>
                                  </select>
                               </div>
                               <button class="btn btn-search" style="background: #3d3d3d none repeat scroll 0 0;
                               border: medium none;
                               border-radius: 3px;
                               display: block;
                               height: 35px;
                               line-height: 27px;
                               padding: 8px 8px 8px 10px;
                               position: absolute;
                               right: 4px;
                               text-align: center;
                               top: 5px;
                               width: 50px;">
                               <i class="fa fa-search"></i>
                            </button>
                         </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<script type="text/javascript">
  $(document).ready(function () {
     var str = location.href.toLowerCase();
     $("ul.menu li a").each(function () {
        if (str.indexOf(this.href.toLowerCase()) >= 0) {
           $("ul.menu li").removeClass("active");
           $(this).parent().addClass("active");
        }
     });

     jQuery("#menu-icon").on("click", function () {
        jQuery(".sf-menu-phone").slideToggle();
        jQuery(this).toggleClass("active");
     });

     jQuery('.sf-menu-phone').find('li.parent').append('<i class="fa fa-angle-down"></i>');
     jQuery('.sf-menu-phone li.parent i').on("click", function () {
        if (jQuery(this).hasClass('fa-angle-up')) {
           jQuery(this).removeClass('fa-angle-up').parent('li.parent').find('> ul').slideToggle();
        } else {
           jQuery(this).addClass('fa-angle-up').parent('li.parent').find('> ul').slideToggle();
        }
     });

     $('ul.tree.dhtml').hide();

                    //to do not execute this script as much as it's called...
                    if (!$('ul.tree.dhtml').hasClass('dynamized')) {
                        //add growers to each ul.tree elements
                        $('ul.tree.dhtml ul').prev().before("<span class='grower OPEN'> </span>");

                        //dynamically add the '.last' class on each last item of a branch
                        $('ul.tree.dhtml ul li:last-child, ul.tree.dhtml li:last-child').addClass('last');

                        //collapse every expanded branch
                        $('ul.tree.dhtml span.grower.OPEN').addClass('CLOSE').removeClass('OPEN').parent().find('ul:first').hide();
                        $('ul.tree.dhtml').show();

                        //open the tree for the selected branch
                        $('ul.tree.dhtml .selected').parents().each(function () {
                        	if ($(this).is('ul'))
                        		toggleBranch($(this).prev().prev(), true);
                        });
                        toggleBranch($('ul.tree.dhtml .selected').prev(), true);

                        //add a fonction on clicks on growers
                        $('ul.tree.dhtml span.grower').click(function () {
                        	toggleBranch($(this));
                        });
                        //mark this 'ul.tree' elements as already 'dynamized'
                        $('ul.tree.dhtml').addClass('dynamized');

                        $('ul.tree.dhtml').removeClass('dhtml');
                     }
                  });
  $("#btnsearch").click(function () {
     SearchProduct();
  });
  $("#txtsearch").keydown(function (event) {
     if (event.keyCode == 13) {
        SearchProduct();
     }
  });
  function SearchProduct() {
     var key = $('#txtsearch').val();
     if (key == '' || key == 'Tìm kiếm...') {
        $('#txtsearch').focus();
        return;
     }
     var group = $('#lbgroup').val();
     window.location = 'tim-kiem7c8e.html?group=' + group + '&key=' + key;
  }
  $(window).scroll(function () {
   var scrollTop = $(window).scrollTop();
   if (scrollTop != 0) {
      $(".navigation-menu").addClass("navbar-fixed-top");
      return false;
   } else {
      $(".navigation-menu").removeClass("navbar-fixed-top");
      return false;
   }
});

                //animate the opening of the branch (span.grower jQueryElement)
                function openBranch(jQueryElement, noAnimation) {
                	jQueryElement.addClass('OPEN').removeClass('CLOSE');
                	if (noAnimation)
                		jQueryElement.parent().find('ul:first').show();
                	else
                		jQueryElement.parent().find('ul:first').slideDown();
                }
                //animate the closing of the branch (span.grower jQueryElement)
                function closeBranch(jQueryElement, noAnimation) {
                	jQueryElement.addClass('CLOSE').removeClass('OPEN');
                	if (noAnimation)
                		jQueryElement.parent().find('ul:first').hide();
                	else
                		jQueryElement.parent().find('ul:first').slideUp();
                }

                //animate the closing or opening of the branch (ul jQueryElement)
                function toggleBranch(jQueryElement, noAnimation) {
                	if (jQueryElement.hasClass('OPEN'))
                		closeBranch(jQueryElement, noAnimation);
                	else
                		openBranch(jQueryElement, noAnimation);
                }
             </script>


