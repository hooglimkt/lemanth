$(document).ready(function(){"use strict";$(".hero-form").submit(function(o){o.preventDefault();var s=$(".name"),r=$(".email"),e=$(".phone"),l=$(".date"),o=$(".doctor");if(""==s.val())return s.closest(".form-control").addClass("error"),s.focus(),!1;if(s.closest(".form-control").removeClass("error").addClass("success"),""==r.val())return r.closest(".form-control").addClass("error"),r.focus(),!1;if(r.closest(".form-control").removeClass("error").addClass("success"),""==e.val())return e.closest(".form-control").addClass("error"),e.focus(),!1;if(e.closest(".form-control").removeClass("error").addClass("success"),""==l.val())return l.closest(".form-control").addClass("error"),l.focus(),!1;if(l.closest(".form-control").removeClass("error").addClass("success"),""==o.val())return o.closest(".form-control").addClass("error"),o.focus(),!1;o.closest(".form-control").removeClass("error").addClass("success");o="name="+s.val()+"&email="+r.val()+"&phone="+e.val()+"&date="+l.val()+"&doctor="+o.val();return $(".loading").fadeIn("slow").html("Loading..."),$.ajax({type:"POST",data:o,url:"php/heroForm.php",cache:!1,success:function(o){$(".form-control").removeClass("success"),("success"==o?$(".loading").fadeIn("slow").html('<font color="#00596e">Mail sent Successfully.</font>'):$(".loading").fadeIn("slow").html('<font color="#ff5607">Mail not sent.</font>')).delay(3e3).fadeOut("slow")}}),!1}),$("#reset").on("click",function(){$(".form-control").removeClass("success").removeClass("error")})});