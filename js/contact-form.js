$(document).ready(function(){"use strict";$(".contact-form").submit(function(s){s.preventDefault();var o=$(".name"),r=$(".email"),e=$(".phone"),l=$(".patient"),a=$(".subject"),s=$(".message");if(""==o.val())return o.closest(".form-control").addClass("error"),o.focus(),!1;if(o.closest(".form-control").removeClass("error").addClass("success"),""==r.val())return r.closest(".form-control").addClass("error"),r.focus(),!1;if(r.closest(".form-control").removeClass("error").addClass("success"),""==e.val())return e.closest(".form-control").addClass("error"),e.focus(),!1;if(e.closest(".form-control").removeClass("error").addClass("success"),""==l.val())return l.closest(".form-control").addClass("error"),l.focus(),!1;if(l.closest(".form-control").removeClass("error").addClass("success"),""==a.val())return a.closest(".form-control").addClass("error"),a.focus(),!1;if(a.closest(".form-control").removeClass("error").addClass("success"),""==s.val())return s.closest(".form-control").addClass("error"),s.focus(),!1;s.closest(".form-control").removeClass("error").addClass("success");s="name="+o.val()+"&email="+r.val()+"&phone="+e.val()+"&patient="+l.val()+"&subject="+a.val()+"&msg="+s.val();return $(".loading").fadeIn("slow").html("Loading..."),$.ajax({type:"POST",data:s,url:"php/contactForm.php",cache:!1,success:function(s){$(".form-control").removeClass("success"),("success"==s?$(".loading").fadeIn("slow").html('<font color="#48af4b">Mail sent Successfully.</font>'):$(".loading").fadeIn("slow").html('<font color="#ff5607">Mail not sent.</font>')).delay(3e3).fadeOut("slow")}}),!1}),$("#reset").on("click",function(){$(".form-control").removeClass("success").removeClass("error")})});