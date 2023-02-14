<?php

/**
 * TO DO: Fix bug not changing url after clicking once
 */
class NOHS_DonationWidget extends ET_Builder_Module
{

	public $slug       = 'nohs_donation_widget';
	public $vb_support = 'off';

	public function init()
	{
		// Module name
		$this->name = esc_html__('Donation Widget', 'nohs-donation-widget');

		// Module Icon
		// $this->icon          = 'x';
		$this->icon_path        =  plugin_dir_path(__FILE__) . 'icon.svg';

		// Toggle settings
		// Toggles are grouped into array of tab name > toggles > toggle definition
		$this->settings_modal_toggles  = array(
			// Content tab's slug is "general"
			'general'  => array(
				'toggles' => array(
					'campaign_setup_section' 			=> esc_html__('Campagin Setup', 'nohs-donation-widget'),
					'single_donation_section' 			=> esc_html__('Single Donations', 'nohs-donation-widget'),
					'monthly_donation_section'      => esc_html__('Monthly Donations', 'nohs-donation-widget'),
				),
			)
		);
	}

	public function get_fields()
	{
		return array(
			'campaign_setup_details' => array(
				'label' => esc_html__('Campaign URL', 'nohs-donation-widget'),
				'description'     => esc_html__('Please enter the Canada Helps URL without any parameters. For example: https://www.canadahelps.org/en/dn/m/10589 is okay. But having parameters like ?amount=100 at the end is not okay.', 'nohs-donation-widget'),
				'type'  => 'text',
				'toggle_slug'     => 'campaign_setup_section',
			),
			'single_donation_details'     => array(
				'label'           => esc_html__('Single Donation Details', 'nohs-donation-widget'),
				'type'                => 'composite',
				'option_category' => 'basic_option',
				'description'     => esc_html__('Content entered here will appear as a single donation.', 'nohs-donation-widget'),
				'toggle_slug'     => 'single_donation_section',
				'composite_type'      => 'default',
				'composite_structure' => array(
					'single_donation_1' => array(
						'label'    => esc_html('Donation 1', 'nohs-donation-widget'),
						'controls' => array(
							'single_donation_1_value' => array(
								'label' => esc_html__('Amount', 'nohs-donation-widget'),
								'description'     => esc_html__('You can use the slider to adjust donation amount, or manually type an amount in the box beside.', 'nohs-donation-widget'),
								'type'  => 'range',
								'range_settings' => array(
									'min' => '20',
									'max' => '300',
									'step' => '1',
								),
							),
							'single_donation_1_description' => array(
								'label' => esc_html__('Description', 'nohs-donation-widget'),
								'type'  => 'textarea',
								'description'     => esc_html__('Content entered here will be used to describe what the amount of this donation can help fund.', 'nohs-donation-widget'),
							),
						),
					),
					'single_donation_2' => array(
						'label'    => esc_html('Donation 2', 'nohs-donation-widget'),
						'controls' => array(
							'single_donation_2_value' => array(
								'label' => esc_html__('Amount', 'nohs-donation-widget'),
								'description'     => esc_html__('You can use the slider to adjust donation amount, or manually type an amount in the box beside.', 'nohs-donation-widget'),
								'type'  => 'range',
								'range_settings' => array(
									'min' => '20',
									'max' => '300',
									'step' => '1',
								),
							),
							'single_donation_2_description' => array(
								'label' => esc_html__('Description', 'nohs-donation-widget'),
								'type'  => 'textarea',
								'description'     => esc_html__('Content entered here will be used to describe what the amount of this donation can help fund.', 'nohs-donation-widget'),
							),
						),
					),
					'single_donation_3' => array(
						'label'    => esc_html('Donation 3', 'nohs-donation-widget'),
						'controls' => array(
							'single_donation_3_value' => array(
								'label' => esc_html__('Amount', 'nohs-donation-widget'),
								'description'     => esc_html__('You can use the slider to adjust donation amount, or manually type an amount in the box beside.', 'nohs-donation-widget'),
								'type'  => 'range',
								'range_settings' => array(
									'min' => '20',
									'max' => '300',
									'step' => '1',
								),
							),
							'single_donation_3_description' => array(
								'label' => esc_html__('Description', 'nohs-donation-widget'),
								'type'  => 'textarea',
								'description'     => esc_html__('Content entered here will be used to describe what the amount of this donation can help fund.', 'nohs-donation-widget'),
							),
						),
					),
					'single_donation_other' => array(
						'label'    => esc_html('Donation Other', 'nohs-donation-widget'),
						'controls' => array(
							'single_donation_other_description' => array(
								'label' => esc_html__('Description', 'nohs-donation-widget'),
								'type'  => 'textarea',
								'description'     => esc_html__('Content entered here will be used to describe what the amount of this donation can help fund.', 'nohs-donation-widget'),
							),
						),
					),
				),
			),
			//need to add a single and monthly donation description for the Other box
			'monthly_donation_details'     => array(
				'label'           => esc_html__('monthly Donation Details', 'nohs-donation-widget'),
				'type'                => 'composite',
				'option_category' => 'basic_option',
				'description'     => esc_html__('Content entered here will appear as a monthly donation', 'nohs-donation-widget'),
				'toggle_slug'     => 'monthly_donation_section',
				'composite_type'      => 'default',
				'composite_structure' => array(
					'monthly_donation_1' => array(
						'label'    => esc_html('Donation 1', 'nohs-donation-widget'),
						'controls' => array(
							'monthly_donation_1_value' => array(
								'label' => esc_html__('Amount', 'nohs-donation-widget'),
								'description'     => esc_html__('You can use the slider to adjust donation amount, or manually type an amount in the box beside.', 'nohs-donation-widget'),
								'type'  => 'range',
								'range_settings' => array(
									'min' => '20',
									'max' => '300',
									'step' => '1',
								),
							),
							'monthly_donation_1_description' => array(
								'label' => esc_html__('Description', 'nohs-donation-widget'),
								'type'  => 'textarea',
								'description'     => esc_html__('Content entered here will be used to describe what the amount of this donation can help fund.', 'nohs-donation-widget'),
							),
						),
					),
					'monthly_donation_2' => array(
						'label'    => esc_html('Donation 2', 'nohs-donation-widget'),
						'controls' => array(
							'monthly_donation_2_value' => array(
								'label' => esc_html__('Amount', 'nohs-donation-widget'),
								'description'     => esc_html__('You can use the slider to adjust donation amount, or manually type an amount in the box beside.', 'nohs-donation-widget'),
								'type'  => 'range',
								'range_settings' => array(
									'min' => '20',
									'max' => '300',
									'step' => '1',
								),
							),
							'monthly_donation_2_description' => array(
								'label' => esc_html__('Description', 'nohs-donation-widget'),
								'type'  => 'textarea',
								'description'     => esc_html__('Content entered here will be used to describe what the amount of this donation can help fund.', 'nohs-donation-widget'),
							),
						),
					),
					'monthly_donation_3' => array(
						'label'    => esc_html('Donation 3', 'nohs-donation-widget'),
						'controls' => array(
							'monthly_donation_3_value' => array(
								'label' => esc_html__('Amount', 'nohs-donation-widget'),
								'description'     => esc_html__('You can use the slider to adjust donation amount, or manually type an amount in the box beside.', 'nohs-donation-widget'),
								'type'  => 'range',
								'range_settings' => array(
									'min' => '20',
									'max' => '300',
									'step' => '1',
								),
							),
							'monthly_donation_3_description' => array(
								'label' => esc_html__('Description', 'nohs-donation-widget'),
								'type'  => 'textarea',
								'description'     => esc_html__('Content entered here will be used to describe what the amount of this donation can help fund.', 'nohs-donation-widget'),
							),
						),
					),
					'monthly_donation_other' => array(
						'label'    => esc_html('Donation Other', 'nohs-donation-widget'),
						'controls' => array(
							'monthly_donation_other_description' => array(
								'label' => esc_html__('Description', 'nohs-donation-widget'),
								'type'  => 'textarea',
								'description'     => esc_html__('Content entered here will be used to describe what the amount of this donation can help fund.', 'nohs-donation-widget'),
							),
						),
					),
				),
			),
			//TO DO: need to add a single and monthly donation description for the Other box
			// 'monthly_donation_other_amount_description' => array(
			// 	'label'           => esc_html__('Description for Other Amount option on monthly donations', 'nohs-donation-widget'),
			// 	'type'            => 'text',
			// 	'toggle_slug'     => 'single_donation_section',
			// ),
		);
	}

	public function render($unprocessed_props, $content, $render_slug)
	{
		return sprintf(
			'
			<div class="donation_widget_wrapper">
			<div class="donation_types">
				<button type="button" class="donation_types donation_types_single_button donation_button is-active" data-donation-type="single" data-initial-option="single-%1$s" data-initial-option-value="%1$s" aria-pressed="true">
        Single
    		</button>
				<button type="button" class="donation_types donation_types_monthly_button donation_button" data-donation-type="monthly" data-initial-option="monthly-%7$s" data-initial-option-value="%7$s" aria-pressed="false">
        Monthly
    		</button>
			</div>
			<div class="donation_values">
				<div class="donation_values_row">
					<button type="button" class="donation_single donation_single_button donation_single_1_value donation_button is-active is-visible" data-widget-option="single-%1$s" data-widget-option-value="%1$s">
        				$%1$s
    				</button>
					<button type="button" class="donation_single donation_single_button donation_single_2_value donation_button is-visible" data-widget-option="single-%3$s" data-widget-option-value="%3$s">
        		$%3$s
    			</button>
					<button type="button" class="donation_single donation_single_button donation_single_3_value donation_button is-visible" data-widget-option="single-%5$s" data-widget-option-value="%5$s">
        		$%5$s
    			</button>
					<button type="button" class="donation_single donation_single_button donation_single_other_value donation_button is-visible" data-widget-option="single-other" data-widget-option-value="other">
					Other
    			</button>
					<button type="button" class="donation_monthly donation_monthly_button donation_monthly_1_value donation_button is-active" data-widget-option="monthly-%7$s" data-widget-option-value="%7$s">
					$%7$s
    			</button>
					<button type="button" class="donation_monthly donation_monthly_button donation_monthly_2_value donation_button" data-widget-option="monthly-%9$s" data-widget-option-value="%9$s">
					$%9$s
    			</button>
					<button type="button" class="donation_monthly donation_monthly_button donation_monthly_3_value donation_button" data-widget-option="monthly-%11$s" data-widget-option-value="%11$s">
					$%11$s
    			</button>
					<button type="button" class="donation_monthly donation_monthly_button donation_monthly_other_value donation_button" data-widget-option="single-other" data-widget-option-value="other">
					Other
    			</button>
				</div>
			</div>
			<div class="donation_descriptions">
				<section class="donation_single donation_single_1_description donation_description is-visible is-active">
					<p>%2$s</p>
				</section>
				<section class="donation_single donation_single_2_description donation_description">
					<p>%4$s</p>
				</section>
				<section class="donation_single donation_single_3_description donation_description">
					<p>%6$s</p>
				</section>
				<section class="donation_single donation_single_other_description donation_description ">
					<p>%13$s</p>
				</section>
				<section class="donation_monthly donation_monthly_1_description donation_description is-active ">
					<p>%8$s</p>
				</section>
				<section class="donation_monthly donation_monthly_2_description donation_description">
					<p>%10$s</p>
				</section>
				<section class="donation_monthly donation_monthly_3_description donation_description">
					<p>%12$s</p>
				</section>
				<section class="donation_monthly donation_monthly_other_description donation_description">
					<p>%14$s</p>
				</section>
			</div>
			<form id="donation-form" class="" method="get" action="" target="_blank">
				<input class="donation_type" id="donationType" name="donationType" type="hidden" value="single">
				<input class="donation_value" id="donationValue" name="donationValue" value="">
				<button type="button" id="donationButton" class="donation_button donate_now" data-donation-type="single" data-donation-value="%1$s" data-campaign-url="%15$s">
					Donate Now
    			</button>
			</form>
			</div>
			',
			esc_html($this->props['single_donation_1_value']),
			esc_html($this->props['single_donation_1_description']),
			esc_html($this->props['single_donation_2_value']),
			esc_html($this->props['single_donation_2_description']),
			esc_html($this->props['single_donation_3_value']),
			esc_html($this->props['single_donation_3_description']),
			esc_html($this->props['monthly_donation_1_value']),
			esc_html($this->props['monthly_donation_1_description']),
			esc_html($this->props['monthly_donation_2_value']),
			esc_html($this->props['monthly_donation_2_description']),
			esc_html($this->props['monthly_donation_3_value']),
			esc_html($this->props['monthly_donation_3_description']),
			esc_html($this->props['single_donation_other_description']),
			esc_html($this->props['monthly_donation_other_description']),
			esc_html($this->props['campaign_setup_details']),
		);
	}
}

new NOHS_DonationWidget;


/* NOTE: full extension example available here:
 * https://github.com/elegantthemes/divi-extension-example/blob/master/includes/modules/CustomCtaAllOptions/CustomCtaAllOptions.php
 */
