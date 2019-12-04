// JavaScript Document
var $t;
Cart = new function(){
	var root=this;
	this.showSpinLoading = function(){
        $(".waiting-spin-content-web").css({ "display": "block" });
    }
    this.hideSpinLoading = function(){
        $(".waiting-spin-content-web").css({ "display": "" });
    }
    root.fnModal = function(type,title){
    	root.showSpinLoading();
    	initAjax({
    		url:'ajax/loadmodal.html',
    		type:'post',
    		async:false,
    		data:{type:type},
    		success:function(data){
    			root.hideSpinLoading();
    			$('#myModalLabel').text(title);
    			$('#modal-content').html(data);
    			$('#myModal').modal('show');
    		}
    	})
    }
	root.showMsg = function(type,msg){
		Lobibox.notify(type, {
			size: 'mini',
			msg: msg,
			delay: 3000,
			showClass: 'zoomIn', 
			hideClass: 'zoomOut',
		});
	}
	root.refreshCart = function(){
		$.post("gio-hang.html",function(data){
			$("#box-shopcart").html(data);
			NProgress.done();
			$("#main_content").animate({opacity:1});
			root.updateCartNumber();
		})
	}
	root.updateCart = function(){
		NProgress.start();
		$("#main_content").animate({opacity:".9"});
		initAjax({
			url:"ajax/update-cart.html",
			data:$("#box-shopcart form").serialize(),
			success:function(data){
				root.refreshCart();
			}
		})
	}
	root.deleteCart = function($id){
		if(confirm("Bạn có chắc chắn muốn xóa sản phẩm này?")){
			NProgress.start();
			$("#main_content").animate({opacity:".9"});
			initAjax({
				url:"ajax/delete-cart.html",
				data:{id:$id},
				success:function(data){
					root.refreshCart();
				}
			})
		}
	}
	root.clearCart = function(){
		if(confirm("Bạn muốn xóa toàn bộ giỏ hàng?")){
			NProgress.start();
			$("#main_content").animate({opacity:".9"});
			initAjax({
				url:"ajax/clear-cart.html",
				success:function(data){
					root.refreshCart();
				}
			})
		}
	}
	root.updateCartNumber = function(){
		$.post("ajax/get-cart-num.html",function(data){
			$(".num-cart").html(data);
		})
	}
	root.doAddCart = function($id,$qty,$color,$size){
		NProgress.start();
		initAjax({
			url:"ajax/add-cart.html",
			data:{id:$id,qty:$qty,color:$color,size:$size},
			async:false,
			success:function(data){
				NProgress.done();
				$(".num-cart").html(data);
				setTimeout(function(){
					window.location.href="gio-hang.html";
				},1000)
				//root.showMsg("success","Thêm sản phẩm "+$name+" vào giỏ thành công");
			}
		})
		return false;
	}
	root.addCart = function(){
		$('.classize').each(function(index, el) {
			$(this).children('ul').find('li:eq(1)').children('a').addClass('act');
		});
		$('input[type="number"]').change(function(event) {
			$('input[type="number"]').attr('value', $(this).val());
		});
		$('.classize ul li a').click(function(event) {
			$('.classize ul').find('a').removeClass('act');
			console.log($(this).parent().index());
			$('.classize').find('li:eq('+$(this).parent().index()+')').children('a').addClass('act');
		});
		$(".add-cart").click(function(){
			$color = 0;
			$size = 0;
			$id = $(this).data("id");
			$qty = parseInt($("input.qty").val());
			if($(".wrap-color").length){
				if($(".wrap-color .color_item.active").length){
					$color = $(".wrap-color .color_item.active").data("id");
				}else{
					alert('Vui lòng chọn màu cho sản phẩm!');
					return false;
				}
			}
			if($(".classize").length){
				if($(".classize ul li a.act").length){
					$size = $(".classize ul li a.act").data("name");
				}else{
					alert('Vui lòng chọn kích thước cho sản phẩm!');
					return false;
				}
			}
			root.doAddCart($id,$qty,$color,$size);
			return false;
		})
	}
	root.delorder_gh= function($id){
		if(confirm("Xác nhận xóa sản phẩm này?")){
			$.ajax({
				type:'post',
				url:"ajax/delete-cart.php",
				data:{id:id},
				dataType:"json",
				success:function(data){
					$("#"+id).animate({height:0,opacity:0},function(){
						$(this).remove();
						$("#gio_hang_tong").html(data.total);
						$('#soluongmua').html(data.sl);
						if(data.qty==0){
							$(".empty-cart").removeClass("hide");
							$(".cart-enter, p.total").hide();
						}

					})
				}
			})
		}
		return false;
	}
	root.formatNumber = function(nStr, decSeperate, groupSeperate){
		nStr += '';
	    x = nStr.split(decSeperate);
	    x1 = x[0];
	    x2 = x.length > 1 ? '.' + x[1] : '';
	    var rgx = /(\d+)(\d{3})/;
	    while (rgx.test(x1)) {
	        x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
	    }
	    return x1 + x2;
	}
	root.Muahang = function(x){
		var id=$(x).attr('data-id');
		var sl=1;
		root.doAddCart(id,sl,0,0);
	}
    
}
function check(){
  if(isEmpty($('#frm_order input[name="hoten"]').val(), nhaphoten )){$('#frm_order input[name="hoten"]').focus();return false;}
  if(isEmpty($('#frm_order input[name="dienthoai"]').val(), nhapsodienthoai)){$('#frm_order input[name="dienthoai"]').focus();return false;}
  if(isPhone($('#frm_order input[name="dienthoai"]').val(), nhapsodienthoai)){$('#frm_order input[name="dienthoai"]').focus();return false;}
  if(isEmpty($('#frm_order select[name="thanhpho"]').val(), 'Chọn Tỉnh/Thành phố')){$('#frm_order select[name="thanhpho"]').focus();return false;}
  if(isEmpty($('#frm_order select[name="quan"]').val(), 'Chọn Quận/Huyện')){$('#frm_order select[name="quan"]').focus();return false;}
  if(isEmpty($('#frm_order input[name="diachi"]').val(), nhapdiachi)){$('#frm_order input[name="diachi"]').focus();return false;}
  if(isEmpty($('#frm_order input[name="email"]').val(), emailkhonghople)){$('#frm_order input[name="email"]').focus();return false;}
  if(isEmail($('#frm_order input[name="email"]').val(), emailkhonghople)){$('#frm_order input[name="email"]').focus();return false;}
  $('#frm_order').submit();
}
$(document).ready(function(e) {
	Cart.addCart();
	$('#thanhpho').change(function(e) {
		var loadajax = "ajax/quan.php?id="+$(this).val();
		setTimeout(function(){$('#quan').load(loadajax)},0);
	});
});
