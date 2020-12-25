(function($){

 jQuery.fn.exform = function(options){
  options = $.extend({
	   path: '/exform_ext/',
	   name: true,
	  phone: true,
	  email: true,
	message: true,
	  theme: 'mform',
	wrapper: 'body',
   autoshow: false,
     parent: ''
    }, options);
	
  var exform_blck = ( options.wrapper == 'body' ) ? options.wrapper : '.' + options.wrapper;

  var exform_wrpr = '.exform_wrapper.'+ options.theme;
  if(exform_blck != 'body') exform_wrpr = '.'+ $(this).attr('class') +' '+ exform_wrpr;

  var exform_bgcs = '.exform_bg.'+ options.theme; 

  $('head').append('<link rel="stylesheet" type="text/css" href="'+ options.path +'themes/'+ options.theme +'/css/exform.css" />');
  
  if(exform_blck == 'body'){ 
   if(options.autoshow) start_form();
   $(this).click(start_form);
  }
  else start_form();
  		
  function start_form(){ 
   if($(exform_wrpr).length == 0){
    
	mf_prms = {mf_path: options.path, mf_theme: options.theme }

	if(exform_blck == 'body'){
     $(exform_blck).append('<div class="exform_bg '+ options.theme +'"></div>');
	 $(exform_bgcs).fadeTo(200, 0.3, function(){
	  $.post(options.path + 'exform.php', mf_prms, function(data){ show_form(data) });
     });
    }
    else $.post(options.path + 'exform.php', mf_prms, function(data){ show_form(data) })	
    
   }
   return false
  }

  function show_form(data){ 
   if(exform_blck == 'body'){ 
	if(options.autoshow) $(exform_bgcs).show();
	$('body').append(data);
	operations();
	$(exform_wrpr).css({position: 'fixed', left: '50%', top: '50%',
	 'margin-left': '-' + parseInt($(exform_wrpr).css('width')) / 2 + 'px',
	 'margin-top': '-' + parseInt($(exform_wrpr).css('height')) / 2 + 'px'
	})
	.show();
   }
   else{
	$('.'+options.wrapper).html(data);
	$(exform_wrpr).css({display:'block'});
	$(exform_wrpr +' .mf_submit input[type=button]').remove();
	$(exform_wrpr +' .exform_header span').remove();
	operations();
   }
   
   if($(exform_wrpr +'.finmsg p').length > 0){ 
    $(exform_wrpr +' input, .exform_bg,'+ exform_wrpr +' .close').click(function(){ remove_form() });
	setTimeout(remove_form, 3000);
   }
  }
  
  function operations(){ 
   if($(exform_wrpr +' form[name="exform"]').length > 0){
    if($(exform_wrpr +' div').is('mf_captcha')) document.getElementById('mf_captcha_'+ options.theme).src = options.path +'captcha/securimage_show.php?'+ Math.random();
    disable_fields();
    $(exform_wrpr +' input, .exform_wrapper.'+ options.theme +' textarea').focus(active_field);
	$(exform_wrpr +' form[name="exform"]').submit(submit_form);
	$(exform_wrpr +' input.close, .exform_bg').click(function(){ remove_form() });
	$(exform_wrpr +' input[name="acspt"], '+ exform_wrpr +' .close').click(function(){ remove_form(); return false });
   }
   
  }
  
  function submit_form(){ 
   if($(exform_wrpr +' input[name="user_name"]').val().length == 0){
	
	if($('input').is('#mf_fileUpload')){
	 if($('#mf_fileUpload')[0].files[0]){
	  var fileSize = parseInt( $('#mf_fileUpload')[0].files[0].size/ 1000000) > 2;
	  if(fileSize > 4){ alert('File size should not exceed 4 Mb. ( '+ fileSize + ')'); return false };
	  var fileType = $('#mf_fileUpload')[0].files[0].type.match(/(.*)\/(.*)/);
	  if(fileType[1] != 'image'){ alert('Invalid file type ( '+ fileType[1] + ')'); return false }
	 }
	}
	
	$(exform_wrpr +' .mf_submit input').attr('disabled', 'disabled');
	
	formData = new FormData($(exform_wrpr +' form[name="exform"]').get(0));
	$.ajax({
	 
	 xhr: function(){
	  var xhr = new window.XMLHttpRequest();
	  xhr.upload.addEventListener("progress", function(evt){
	   if(evt.lengthComputable){
		var prcnts = evt.loaded/evt.total;
		var length = parseInt($('.progress').width());
		$('.progress').children('div').width(Math.round(prcnts*length));
	   }
      }, false);
      return xhr;
     },
	 url: options.path + 'exform.php', data: formData, type:'post', contentType: false, processData: false,
	 success: function(data){ 
	  if(options.wrapper == 'body'){
	   $(exform_wrpr).remove();
	   show_form(data)
	  }
	  else{
	   $('.'+ options.wrapper).html(data);
	   $(exform_wrpr).css({display:'block'});
	   $(exform_wrpr +' .mf_submit input[type="button"]').remove();
	   $(exform_wrpr +' .exform_header span').remove();
	   operations();
	   $(exform_wrpr +'.finmsg').fadeIn(3000).delay(1000).fadeOut(3000, function(){ location.reload() });
	  }
	 },
	 error: function(data){}
    })
   
   } 
   else remove_form();
   return false
  }

  function active_field() {
   $(exform_wrpr +' .infocus').each(function(){ $(this).removeClass('infocus') });
   $(exform_wrpr +' table .' + $(this).attr('name')).addClass('infocus');
   if($(this).hasClass('mf_error')) $(this).removeClass('mf_error').attr('value', '');
  }

  function remove_form(){ 
   $(exform_bgcs +', .exform_wrapper.'+ options.theme).fadeOut(500, function(){ $(this).remove() }) 
  }

  function disable_fields() {
   if(!options.name) $(exform_wrpr +' .mf_name').remove();
   if(!options.phone) $(exform_wrpr +' .mf_phone').remove();
   if(!options.email) $(exform_wrpr +' .mf_email').remove();
   if(!options.message) $(exform_wrpr +' .mf_message').remove();
  }
 }
})(jQuery);