<?php

App::uses('AppHelper', 'View/Helper');

class EmailstardustHelper extends AppHelper {
	
	public $helpers = array('Html', 'Form', 'Session');
	
	
	
	
	public function body() {
		
		return '<body style="width: 100% !important; height: 100%; background: #efefef; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; margin: 0; padding: 0; font-size: 100%; font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; line-height: 1.5;">';
		
	}
	
	
	
	
	public function table() {
	
		return '<table style="width: 100% !important; height: 100%; background: #efefef; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none;width: 100% !important; border-collapse: collapse;">';
		
	}
	
	
	
	
	public function td() {
	
		return '<td style="display: block !important; clear: both !important; margin: 0 auto !important; max-width: 580px !important;">';
		
	}
	
	
	
	
	public function tdContent() {
	
		return '<td style="background: white; padding: 30px 35px;">';
		
	}
	
	
	
	
	public function tdFooter() {
	
		return '<td style="background: none; padding: 30px 35px;" align="center">';
		
	}
	
	
	
	
	public function tableHeading() {
	
		return '<table style="width: 100% !important; border-collapse: collapse;">';
		
	}
	
	
	
	
	public function heading() {
		
		$cover = '';
		if (Configure::read('Emailstardust.headerCover')) $cover = "background:url('" .Configure::read('Emailstardust.headerCoverUrl') ."') no-repeat;";
	
		?>
        <tr>
            <td align="center" style="padding: 80px 0; background: <?php echo Configure::read('Emailstardust.colorHeader'); ?>; color: white; <?php echo $cover; ?>">

                <h1 style="margin-bottom: 20px; line-height: 1.25; font-size: 32px; color:<?php echo Configure::read('Emailstardust.colorTitle'); ?>;"><?php echo Configure::read('Emailstardust.title'); ?></h1>

            </td>
        </tr>
        <?php
		
	}
	
	
	
	
	public function message() {
	
		?>
        <p style="font-size: <?php echo Configure::read('Emailstardust.fontSize'); ?>; font-weight: normal; margin-bottom: 20px; color:<?php echo Configure::read('Emailstardust.colorText'); ?>;"><?php echo Configure::read('Emailstardust.message'); ?></p>
        <?php
		
	}
	
	
	
	
	public function callToAction() {
	
		?>
        <tr>
            <td align="center">
                <p style="font-size: <?php echo Configure::read('Emailstardust.fontSize'); ?>; font-weight: normal; margin-bottom: 20px;">
                    <a href="<?php echo Configure::read('Emailstardust.callToActionUrl'); ?>" style="display: inline-block; background: <?php echo Configure::read('Emailstardust.callToActionBackgroundColor'); ?>; border: solid <?php echo Configure::read('Emailstardust.callToActionBackgroundColor'); ?>; border-width: 10px 20px 8px; font-weight: bold; border-radius: 4px; color: <?php echo Configure::read('Emailstardust.callToActionTextColor'); ?>; text-decoration: none;"><?php echo Configure::read('Emailstardust.callToAction'); ?></a>
                </p>
            </td>
        </tr>
        <?php
		
	}
	
	
	
	
	public function website() {
	
		?>
        <p style="font-size: <?php echo Configure::read('Emailstardust.fontSize'); ?>; font-weight: normal; margin-bottom: 20px;color: <?php echo Configure::read('Emailstardust.colorText'); ?>;">For more information visit <a href="<?php echo Configure::read('Emailstardust.website'); ?>" style="color: <?php echo Configure::read('Emailstardust.colorLink'); ?>; text-decoration: none;"><?php echo Configure::read('Emailstardust.website'); ?></a>.</p>
        <?php
		
	}
	
	
	
	
	public function author() {
	
		?>
        <p style="font-size: <?php echo Configure::read('Emailstardust.fontSize'); ?>; font-weight: normal; margin-bottom: 20px; color: <?php echo Configure::read('Emailstardust.colorText'); ?>;"><em>- <?php echo Configure::read('Emailstardust.author'); ?></em></p>
        <?php
		
	}
	
	
	
	
	public function footer() {
	
		?>
        <p style="font-size: <?php echo Configure::read('Emailstardust.fontSize'); ?>; font-weight: normal; margin-bottom: 20px; margin-bottom: 0; color: <?php echo Configure::read('Emailstardust.colorText'); ?>; text-align: center; font-size: 14px;"><?php echo Configure::read('Emailstardust.footer'); ?></p>
        <p style="font-size: <?php echo Configure::read('Emailstardust.fontSize'); ?>; font-weight: normal; margin-bottom: 20px; margin-bottom: 0; color: <?php echo Configure::read('Emailstardust.colorText'); ?>; text-align: center; font-size: 14px;"><a href="mailto:<?php echo Configure::read('Emailstardust.from.email'); ?>" style="color: <?php echo Configure::read('Emailstardust.colorLink'); ?>; text-decoration: none;"><?php echo Configure::read('Emailstardust.from.email'); ?></a> | <a href="<?php echo Configure::read('Emailstardust.unsubscribeUrl'); ?>" style="color: <?php echo Configure::read('Emailstardust.colorLink'); ?>; text-decoration: none;">Unsubscribe</a> | <a href="<?php echo Configure::read('Emailstardust.privacyUrl'); ?>" style="color: <?php echo Configure::read('Emailstardust.colorLink'); ?>; text-decoration: none;">Privacy policy</a></p>
        <?php
		
	}
	
	
	
	
	public function social() {
	
		?>
		<table style="width: 100% !important; border-collapse: collapse;margin-top:20px;">
		<tr>
			<?php if (Configure::read('Emailstardust.facebook')!="") { ?>
			<td><a href="<?php echo Configure::read('Emailstardust.facebook'); ?>"><?php echo $this->Html->image('Emailstardust.facebook.png', array('alt' => 'Facebook', 'fullBase' => true, 'style' => 'max-width: 100%; margin: 0 auto; display: block;')); ?></a></td>
			<?php } ?>
			<?php if (Configure::read('Emailstardust.googleplus')!="") { ?>
			<td><a href="<?php echo Configure::read('Emailstardust.googleplus'); ?>"><?php echo $this->Html->image('Emailstardust.googleplus.png', array('alt' => 'Google+', 'fullBase' => true, 'style' => 'max-width: 100%; margin: 0 auto; display: block;')); ?></a></td>
			<?php } ?>
			<?php if (Configure::read('Emailstardust.instagram')!="") { ?>
			<td><a href="<?php echo Configure::read('Emailstardust.instagram'); ?>"><?php echo $this->Html->image('Emailstardust.instagram.png', array('alt' => 'Instagram', 'fullBase' => true, 'style' => 'max-width: 100%; margin: 0 auto; display: block;')); ?></a></td>
			<?php } ?>
			<?php if (Configure::read('Emailstardust.linkedin')!="") { ?>
			<td><a href="<?php echo Configure::read('Emailstardust.linkedin'); ?>"><?php echo $this->Html->image('Emailstardust.linkedin.png', array('alt' => 'LinkedIn', 'fullBase' => true, 'style' => 'max-width: 100%; margin: 0 auto; display: block;')); ?></a></td>
			<?php } ?>
			<?php if (Configure::read('Emailstardust.twitter')!="") { ?>
			<td><a href="<?php echo Configure::read('Emailstardust.twitter'); ?>"><?php echo $this->Html->image('Emailstardust.twitter.png', array('alt' => 'Twitter', 'fullBase' => true, 'style' => 'max-width: 100%; margin: 0 auto; display: block;')); ?></a></td>
			<?php } ?>
			<?php if (Configure::read('Emailstardust.youtube')!="") { ?>
			<td><a href="<?php echo Configure::read('Emailstardust.youtube'); ?>"><?php echo $this->Html->image('Emailstardust.youtube.png', array('alt' => 'YouTube', 'fullBase' => true, 'style' => 'max-width: 100%; margin: 0 auto; display: block;')); ?></a></td>
			<?php } ?>
		</tr>
		</table>
        <?php
		
	}
	
	
	
	
}

?>
