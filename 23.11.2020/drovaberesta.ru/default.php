<?php
/**
 *
 * Show the product details page
 *
 * @package	VirtueMart
 * @subpackage
 * @author Max Milbers, Eugen Stranz, Max Galt
 * @link https://virtuemart.net
 * @copyright Copyright (c) 2004 - 2014 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: default.php 9774 2018-03-06 20:43:19Z StefanSTS $
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

/* Let's see if we found the product */
if (empty($this->product)) {
	echo vmText::_('COM_VIRTUEMART_PRODUCT_NOT_FOUND');
	echo '<br /><br />  ' . $this->continue_link_html;
	return;
}

echo shopFunctionsF::renderVmSubLayout('askrecomjs',array('product'=>$this->product));



if(vRequest::getInt('print',false)){ ?>
<body onload="javascript:print();">
<?php } ?>

<div class="product-container productdetails-view productdetails">

	<?php
	// Product Navigation
	if (VmConfig::get('product_navigation', 1)) {
	?>
		<div class="product-neighbours">
		<?php
		if (!empty($this->product->neighbours ['previous'][0])) {
		$prev_link = JRoute::_('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $this->product->neighbours ['previous'][0] ['virtuemart_product_id'] . '&virtuemart_category_id=' . $this->product->virtuemart_category_id, FALSE);
		echo JHtml::_('link', $prev_link, $this->product->neighbours ['previous'][0]
			['product_name'], array('rel'=>'prev', 'class' => 'previous-page','data-dynamic-update' => '1'));
		}
		if (!empty($this->product->neighbours ['next'][0])) {
		$next_link = JRoute::_('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $this->product->neighbours ['next'][0] ['virtuemart_product_id'] . '&virtuemart_category_id=' . $this->product->virtuemart_category_id, FALSE);
		echo JHtml::_('link', $next_link, $this->product->neighbours ['next'][0] ['product_name'], array('rel'=>'next','class' => 'next-page','data-dynamic-update' => '1'));
		}
		?>
		<div class="clear"></div>
		</div>
	<?php } // Product Navigation END
	?>

	<?php // Back To Category Button
	if ($this->product->virtuemart_category_id) {
		$catURL =  JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_category_id='.$this->product->virtuemart_category_id, FALSE);
		$categoryName = vmText::_($this->product->category_name) ;
	} else {
		$catURL =  JRoute::_('index.php?option=com_virtuemart');
		$categoryName = vmText::_('COM_VIRTUEMART_SHOP_HOME') ;
	}
	?>
	<div class="back-to-category">
		<a href="<?php echo $catURL ?>" class="product-details" title="<?php echo $categoryName ?>"><?php echo vmText::sprintf('COM_VIRTUEMART_CATEGORY_BACK_TO',$categoryName) ?></a>
	</div>

	<?php // Product Title   ?>
	<h1><?php echo $this->product->product_name ?></h1>
	<?php // Product Title END   ?>

	<?php // afterDisplayTitle Event
	echo $this->product->event->afterDisplayTitle ?>

	<?php
	// Product Edit Link
	echo $this->edit_link;
	// Product Edit Link END
	?>

	<?php
	// PDF - Print - Email Icon
	if (VmConfig::get('show_emailfriend') || VmConfig::get('show_printicon') || VmConfig::get('pdf_icon')) {
	?>
		<div class="icons">
		<?php

		$link = 'index.php?tmpl=component&option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $this->product->virtuemart_product_id;

		echo $this->linkIcon($link . '&format=pdf', 'COM_VIRTUEMART_PDF', 'pdf_button', 'pdf_icon', false);
		//echo $this->linkIcon($link . '&print=1', 'COM_VIRTUEMART_PRINT', 'printButton', 'show_printicon');
		echo $this->linkIcon($link . '&print=1', 'COM_VIRTUEMART_PRINT', 'printButton', 'show_printicon',false,true,false,'class="printModal"');
		$MailLink = 'index.php?option=com_virtuemart&view=productdetails&task=recommend&virtuemart_product_id=' . $this->product->virtuemart_product_id . '&virtuemart_category_id=' . $this->product->virtuemart_category_id . '&tmpl=component';
		echo $this->linkIcon($MailLink, 'COM_VIRTUEMART_EMAIL', 'emailButton', 'show_emailfriend', false,true,false,'class="recommened-to-friend"');
		?>
		<div class="clear"></div>
		</div>
	<?php } // PDF - Print - Email Icon END
	?>

	<div class="vm-product-container">
<div class="wrap-container-one">
	<div class="vm-product-media-container">
	<?php
	echo $this->loadTemplate('images');
	?>
	</div>

	
	<div class="product-short-description">
	
	<div class="vm-product-details-container">
			<div class="spacer-buy-area">
		<?php
	// Product Short Description
	if (!empty($this->product->product_s_desc)) {
	?>
		<!-- <div class="product-short-description">
		<?php
		/** @todo Test if content plugins modify the product description */
		echo nl2br($this->product->product_s_desc);
		?>
		</div> -->
	<?php
	} // Product Short Description END

	echo shopFunctionsF::renderVmSubLayout('customfields',array('product'=>$this->product,'position'=>'ontop'));
	?>
	


		<?php
		// TODO in Multi-Vendor not needed at the moment and just would lead to confusion
		/* $link = JRoute::_('index2.php?option=com_virtuemart&view=virtuemart&task=vendorinfo&virtuemart_vendor_id='.$this->product->virtuemart_vendor_id);
		  $text = vmText::_('COM_VIRTUEMART_VENDOR_FORM_INFO_LBL');
		  echo '<span class="bold">'. vmText::_('COM_VIRTUEMART_PRODUCT_DETAILS_VENDOR_LBL'). '</span>'; ?><a class="modal" href="<?php echo $link ?>"><?php echo $text ?></a><br />
		 */
		?>

		<?php
		//echo shopFunctionsF::renderVmSubLayout('rating', array('showRating' => $this->showRating, 'product' => $this->product));

		foreach ($this->productDisplayTypes as $type=>$productDisplayType) {

			foreach ($productDisplayType as $productDisplay) {

				foreach ($productDisplay as $virtuemart_method_id =>$productDisplayHtml) {
					?>
					<div class="<?php echo substr($type, 0, -1) ?> <?php echo substr($type, 0, -1).'-'.$virtuemart_method_id ?>">
						<?php
						echo $productDisplayHtml;
						?>
					</div>
					<?php
				}
			}
		}

		//In case you are not happy using everywhere the same price display fromat, just create your own layout
		//in override /html/fields and use as first parameter the name of your file
		echo shopFunctionsF::renderVmSubLayout('prices',array('product'=>$this->product,'currency'=>$this->currency));
		?> <div class="clear"></div><?php
		echo shopFunctionsF::renderVmSubLayout('addtocart',array('product'=>$this->product));

		echo shopFunctionsF::renderVmSubLayout('stockhandle',array('product'=>$this->product));

		// Ask a question about this product
		if (VmConfig::get('ask_question', 0) == 1) {
			$askquestion_url = JRoute::_('index.php?option=com_virtuemart&view=productdetails&task=askquestion&virtuemart_product_id=' . $this->product->virtuemart_product_id . '&virtuemart_category_id=' . $this->product->virtuemart_category_id . '&tmpl=component', FALSE);
			?>
			<div class="ask-a-question">
				<a class="ask-a-question" href="<?php echo $askquestion_url ?>" rel="nofollow" ><?php echo vmText::_('COM_VIRTUEMART_PRODUCT_ENQUIRY_LBL') ?></a>
			</div>
		<?php
		}
		?>

		<?php
		// Manufacturer of the Product
		if (VmConfig::get('show_manufacturers', 1) && !empty($this->product->virtuemart_manufacturer_id)) {
			echo $this->loadTemplate('manufacturer');
		}
		?>

		</div>
	</div>
	<div class="clear"></div>
	
		<div class="req">Купить</div>
		<!-- <?php
		/** @todo Test if content plugins modify the product description */
		echo nl2br($this->product->product_s_desc);
		?> -->
		
			<div class="product-description" >
	<?php /** @todo Test if content plugins modify the product description */ ?>
		<!-- <span class="title"><?php echo vmText::_('COM_VIRTUEMART_PRODUCT_DESC_TITLE') ?></span> -->
	<?php echo $this->product->product_desc; ?>
		</div>
		</div>

</br>

</div>


<?php
	 // Product Short Description END

	echo shopFunctionsF::renderVmSubLayout('customfields',array('product'=>$this->product,'position'=>'dop_pole'));
	?>
<p><span class="like-h2 center-like">Преимущества работы с нами</span></p>
<div id="about" class="vtem-section text-center  featured-box clearfix" style="background-color: #f9f9f9; color: #333333;">
<div class="vtem-section-inside container clearfix">
<div class="row section-content clearfix">
<div id="block14f72acfd587481" class="vtem-block extend widget-customhtml  col-md-12 text-center  " style="background-color: rgba(255, 255, 255, 0); color: #333333;" data-vgrid="12">&nbsp;</div>
<div id="block15ae729a00e8198" class="vtem-block extend widget-customhtml  col-md-4   " style="background-color: rgba(255, 255, 255, 0); color: #333333;" data-vgrid="4">
<div class="vtem-block-inside clearfix">
<div class="custom-html-content clearfix">
<div class="main_us"><img src="/images/delivery-truck.png" alt="доставка сухих дров по области" />
<p>Доставка по области</p>
</div>
</div>
</div>
</div>
<div id="block15ae729f2b94013" class="vtem-block extend widget-customhtml  col-md-4   " style="background-color: rgba(255, 255, 255, 0); color: #333333;" data-vgrid="4">
<div class="vtem-block-inside clearfix">
<div class="custom-html-content clearfix">
<div class="main_us"><img src="/images/russia-ruble.png" alt="низкие цены в СПб" />
<p>Низкие цены</p>
</div>
</div>
</div>
</div>
<div id="block15ae72a39464501" class="vtem-block extend widget-customhtml  col-md-4" style="background-color: rgba(255, 255, 255, 0); color: #333333;" data-vgrid="4">
<div class="vtem-block-inside clearfix">
<div class="custom-html-content clearfix">
<div class="main_us"><img src="/images/trees.png" alt="качественное сырье" />
<p>Качественное сырьё</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="vtem-section-inside container clearfix"><div class="section-title clearfix"><p class="main_title"><span>Оставьте нам заявку!</span></p></div><div class="row section-content clearfix"><div id="block15a56cc60fb6471" style="background-color:rgba(255, 255, 255, 0); color:#333333" class="vtem-block extend widget-customhtml  col-md-6   " data-vgrid="6">
								<div class="vtem-block-inside clearfix">
									<div class="custom-html-content clearfix"><p><img src="/images/operator.jpg" alt=""></p></div></div>
							</div><div id="block15a4be346049429" style="background-color:rgba(255, 255, 255, 0); color:#333333" class="vtem-block system widget-module  col-md-6 contact_form  position-utility" data-vgrid="6">
								<div class="vtem-block-inside clearfix"><div class="vtem-moduletable mod-panel panel panel-default clearfix moduletablecontact-form"><div class="moduletable-content panel-body">





<div id="wrap-contact-form88">








<div class="sscf-form-container">

    <div class="sscf-success-message"></div>

    <form id="formBody88" class="sscf-form" method="post" action="#">


        
                <div class="fl_wrap sscf-valid-true">

                    <span class="sscf-error">Пожалуйста, введите Ваше имя</span>

                    <input class="sscf-input" style="border-radius: 8px;" type="text" id="name88" name="name88">

                    <!-- <label class="fl_label" for="name88">Ваше имя</label> -->

                </div>

        


        
                <div class="fl_wrap sscf-valid-true">

                    <span class="sscf-error">Пожалуйста, введите Ваш номер телефона</span>

                    <input class="sscf-input" type="text" style="border-radius: 8px;" id="phone88" name="phone88">

                   <!--  <label class="fl_label" for="phone88">Ваш номер телефона</label> -->

                </div>

        


        


        


        


        
                <div class="fl_wrap fl_wrap_textarea sscf-valid-true">

                    <span class="sscf-error">Пожалуйста, введите Ваше сообщение</span>

                    <textarea class="sscf-input" id="message88"  style="border-radius: 8px;" name="message88" rows="5" cols="20"></textarea>

                  <!--   <label class="fl_label" for="message88">Тип дров, количество, место доставки</label>
 -->
                </div>

        


        <input type="hidden" name="send88" value="true">



        

<p class="form_tx">Нажимая кнопку, я принимаю <a href="https://drovaberesta.ru/privacy-policy">соглашение о конфиденциальности</a> и соглашаюсь с обработкой персональных данных</p>
        <input class="rf_submit" onclick="yaCounter45127782.reachGoal('otpravka'); return true;" type="submit" value="Отправить" id="send88" name="submitcontactform88">



        
            

    </form>

</div>






</div>



<script>

function check(event) {

    if ( event.keyCode == 32 ) {

        return false;

    }

}



jQuery('document').ready(function() {

    jQuery('.sscf-input').focus(function() {

        jQuery(this).parent().addClass('focused');

        jQuery(this).removeClass('error');

        jQuery(this).parent().removeClass("sscf-valid-error");

        jQuery(this).parent().removeClass("sscf-email-valid-error");

        

        jQuery(this).focusout(function() {

            jQuery(this).parent().removeClass('focused');

            if ( jQuery(this).val() ) {

                jQuery(this).parent().addClass('populated');   

            }

            else {

                jQuery(this).parent().removeClass('populated');   

            }

        }); // end focusout

    }); // end focus



    jQuery('#formBody88').on('submit', function (event) {

            var sscfForm = jQuery(this);

            var sscfError = false;



        


            sscfForm.find('.sscf-input').each(function() {

                if ( !jQuery(this).val() && jQuery(this).parent().hasClass('sscf-valid-true')) {

                    jQuery(this).addClass('error');

                    jQuery(this).parent().addClass("sscf-valid-error");

                    sscfError = true;

                }

            });



            if ( !sscfError ) {

                sscfSend();

            }



            function sscfSend() {

                jQuery.ajax({

                    type: 'POST',

                    url: sscfForm.attr('action'),

                    data: sscfForm.serialize(),

                    cache: false,

                    response: 'text',

                    beforeSend: function() {

                        sscfForm.find('input[type="submit"]').attr('value', 'Отправка сообщения...');

                        sscfForm.find('input[type="submit"]').attr('disabled', 'disabled');

                    },

                    success: function (data) {

                            sscfForm.slideUp('fast');

                            sscfForm.parent().find('.sscf-success-message').append(data);

                            sscfForm.parent().find('.sscf-success-message').slideDown("fast");

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

                        console.log(textStatus, errorThrown);

                    }

                });

            }

        event.preventDefault();

    }); // end submit

}); // end document ready



</script></div> </div></div>
							</div></div>
						</div>




	</div>
<?php
	$count_images = count ($this->product->images);
	if ($count_images > 1) {
		echo $this->loadTemplate('images_additional');
	}

	// event onContentBeforeDisplay
	echo $this->product->event->beforeDisplayContent; ?>

	<?php
	//echo ($this->product->product_in_stock - $this->product->product_ordered);
	// Product Description
	if (!empty($this->product->product_desc)) {
		?>
	
	<?php
	} // Product Description END

	echo shopFunctionsF::renderVmSubLayout('customfields',array('product'=>$this->product,'position'=>'normal'));

	// Product Packaging
	$product_packaging = '';
	if ($this->product->product_box) {
	?>
		<div class="product-box">
		<?php
			echo vmText::_('COM_VIRTUEMART_PRODUCT_UNITS_IN_BOX') .$this->product->product_box;
		?>
		</div>
	<?php } // Product Packaging END ?>

	<?php
	echo shopFunctionsF::renderVmSubLayout('customfields',array('product'=>$this->product,'position'=>'onbot'));

	echo shopFunctionsF::renderVmSubLayout('customfields',array('product'=>$this->product,'position'=>'related_products','class'=> 'product-related-products','customTitle' => true ));

	echo shopFunctionsF::renderVmSubLayout('customfields',array('product'=>$this->product,'position'=>'related_categories','class'=> 'product-related-categories'));

	?>

<?php // onContentAfterDisplay event
echo $this->product->event->afterDisplayContent;

//echo $this->loadTemplate('reviews');

// Show child categories
if ($this->cat_productdetails)  {
	echo $this->loadTemplate('showcategory');
}

$j = 'jQuery(document).ready(function($) {
	$("form.js-recalculate").each(function(){
		if ($(this).find(".product-fields").length && !$(this).find(".no-vm-bind").length) {
			var id= $(this).find(\'input[name="virtuemart_product_id[]"]\').val();
			Virtuemart.setproducttype($(this),id);

		}
	});
});';
//vmJsApi::addJScript('recalcReady',$j);

if(VmConfig::get ('jdynupdate', TRUE)){

	/** GALT
	 * Notice for Template Developers!
	 * Templates must set a Virtuemart.container variable as it takes part in
	 * dynamic content update.
	 * This variable points to a topmost element that holds other content.
	 */
	$j = "Virtuemart.container = jQuery('.productdetails-view');
Virtuemart.containerSelector = '.productdetails-view';
//Virtuemart.recalculate = true;	//Activate this line to recalculate your product after ajax
";

	vmJsApi::addJScript('ajaxContent',$j);

	$j = "jQuery(document).ready(function($) {
	Virtuemart.stopVmLoading();
	var msg = '';
	$('a[data-dynamic-update=\"1\"]').off('click', Virtuemart.startVmLoading).on('click', {msg:msg}, Virtuemart.startVmLoading);
	$('[data-dynamic-update=\"1\"]').off('change', Virtuemart.startVmLoading).on('change', {msg:msg}, Virtuemart.startVmLoading);
});";

	vmJsApi::addJScript('vmPreloader',$j);
}

echo vmJsApi::writeJS();

if ($this->product->prices['salesPrice'] > 0) {
	echo shopFunctionsF::renderVmSubLayout('snippets',array('product'=>$this->product, 'currency'=>$this->currency, 'showRating'=>$this->showRating));
}

?>
</div>