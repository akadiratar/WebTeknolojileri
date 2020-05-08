$(function() {
  $("form[name='registration']").validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true
      }
    },
    messages: {
      password: {
        required: "Lütfen Şifrenizi Giriniz",
      },
      email: "Lütfen Geçerli E-posta Adresi Giriniz"
    },
    submitHandler: function(form) {
     $.ajax({
	  type: "POST",
	  url: "kontrol.php",
	  data: $( "form[name='registration']" ).serialize(),
	  success: function (data) {
		if(data != 2){
			$(".hata").html(data);
		}else{
			$(".hata").html("Kullanıcı Bilgileri Hatalıdır");
		}
      }
	});
    }
  });
});
		



      $(function() {
  $("form[name='iletisim']").validate({
    rules: {
  name:{
    required: true
  },
      email: {
        required: true,
        email: true
      },
      konu: {
        required: true
      },
      mesaj: {
        required: true
      }
    },
    messages: {
      name: {
        required: "Lütfen Ad Soyad Giriniz",
      },
      email: "Lütfen Geçerli E-posta Adresi Giriniz",
      konu: "Lütfen Konu Giriniz",
      mesaj: "Lütfen Mesaj Giriniz",
    },
    submitHandler: function(form) {
    form.submit();
    }
  });
});

      