// This script is loaded both on the frontend page and in the Visual Builder.

jQuery(function($) {
    //handle the clicking of the single frequency donation button
    $('.donation_types_single_button').click(function() {
        $('.donation_monthly_button').removeClass('is-visible');
        $('.donation_types_monthly_button').removeClass('is-active');
        $('.donation_single_button').addClass('is-visible');
        $('.donation_monthly.donation_description.is-active').removeClass(
            'is-visible'
        );
        $('.donation_single.donation_description.is-active').addClass(
            'is-visible'
        );
        $('.donation_types_single_button').addClass('is-active');

        //add single value to hidden form input field
        $('#donationButton').attr('data-donation-type', 'single');
        //try an if statement here
        // if ($('.donation_monthly.is-visible').length) {

        // }
    });

    //handle the clicking of the monthly donation button
    $('.donation_types_monthly_button').click(function() {
        $('.donation_single_button').removeClass('is-visible');
        $('.donation_types_single_button').removeClass('is-active');
        $('.donation_monthly_button').addClass('is-visible');
        $('.donation_monthly.donation_description.is-active').addClass(
            'is-visible'
        );
        $('.donation_types_monthly_button').addClass('is-active');
        $('.donation_description').removeClass('is-visible');

        $('.donation_single.donation_description.is-active').removeClass(
            'is-visible'
        );
        $('.donation_monthly.donation_description.is-active').addClass(
            'is-visible'
        );

        //add monthly value to hidden form input field
        $('#donationButton').attr('data-donation-type', 'monthly');
    });

    $('#donationValue').keyup(function() {
        const newDonationValue = $('#donationValue').val();
        $('#donationButton').attr('data-donation-value', newDonationValue);
    });

    //handle the clicking of single donation 1
    $('.donation_single_1_value').click(function() {
        $('.donation_single.donation_single_button').removeClass('is-active');
        $('.donation_description.donation_single')
            .removeClass('is-visible')
            .removeClass('is-active');
        $('.donation_single_1_description').addClass('is-visible is-active');
        $('input.donation_value').removeClass('is-visible');
        $('.donation_single_1_value').addClass('is-active');
        //add donation value to data attribute on donate button
        const newDonationValue = $('.donation_single_1_value').data(
            'widget-option-value'
        );
        $('#donationButton').attr('data-donation-value', newDonationValue);
    });
    //handle the clicking of single donation 2
    $('.donation_single_2_value').click(function() {
        $('.donation_single.donation_single_button').removeClass('is-active');
        $('.donation_description.donation_single')
            .removeClass('is-visible')
            .removeClass('is-active');
        $('.donation_single_2_description').addClass('is-visible is-active');
        $('input.donation_value').removeClass('is-visible');
        $('.donation_single_2_value').addClass('is-active');
        //add donation value to data attribute on donate button
        const newDonationValue = $('.donation_single_2_value').data(
            'widget-option-value'
        );
        $('#donationButton').attr('data-donation-value', newDonationValue);
    });
    //handle the clicking of single donation 3
    $('.donation_single_3_value').click(function() {
        $('.donation_single.donation_single_button').removeClass('is-active');
        $('.donation_description.donation_single')
            .removeClass('is-visible')
            .removeClass('is-active');
        $('.donation_single_3_description').addClass('is-visible is-active');
        $('input.donation_value').removeClass('is-visible');
        $('.donation_single_3_value').addClass('is-active');
        //add donation value to data attribute on donate button
        const newDonationValue = $('.donation_single_3_value').data(
            'widget-option-value'
        );
        $('#donationButton').attr('data-donation-value', newDonationValue);
    });
    //handle the clicking of single donation other
    $('.donation_single_other_value').click(function() {
        $('.donation_single.donation_single_button').removeClass('is-active');
        $('.donation_description.donation_single')
            .removeClass('is-visible')
            .removeClass('is-active');
        $('.donation_single_other_description').addClass(
            'is-visible is-active'
        );
        $('input.donation_value').addClass('is-visible');
        $('.donation_single_other_value').addClass('is-active');
        //add donation value to data attribute on donate button
        const newDonationValue = $('#donationValue').val();
        $('#donationButton').attr('data-donation-value', newDonationValue);
    });

    //handle the clicking of monthly donation 1
    $('.donation_monthly_1_value').click(function() {
        $('.donation_monthly.donation_monthly_button').removeClass('is-active');
        $('.donation_description.donation_monthly')
            .removeClass('is-visible')
            .removeClass('is-active');
        $('.donation_monthly_1_description').addClass('is-visible is-active');
        $('input.donation_value').removeClass('is-visible');
        $('.donation_monthly_1_value').addClass('is-active');
        //add donation value to data attribute on donate button
        const newDonationValue = $('.donation_monthly_1_value').data(
            'widget-option-value'
        );
        $('#donationButton').attr('data-donation-value', newDonationValue);
    });
    //handle the clicking of monthly donation 2
    $('.donation_monthly_2_value').click(function() {
        $('.donation_monthly.donation_monthly_button').removeClass('is-active');
        $('.donation_description.donation_monthly')
            .removeClass('is-visible')
            .removeClass('is-active');
        $('.donation_monthly_2_description').addClass('is-visible is-active');
        $('input.donation_value').removeClass('is-visible');
        $('.donation_monthly_2_value').addClass('is-active');
        //add donation value to data attribute on donate button
        const newDonationValue = $('.donation_monthly_2_value').data(
            'widget-option-value'
        );
        $('#donationButton').attr('data-donation-value', newDonationValue);
    });
    //handle the clicking of monthly donation 3
    $('.donation_monthly_3_value').click(function() {
        $('.donation_monthly.donation_monthly_button').removeClass('is-active');
        $('.donation_description.donation_monthly')
            .removeClass('is-visible')
            .removeClass('is-active');
        $('.donation_monthly_3_description').addClass('is-visible is-active');
        $('input.donation_value').removeClass('is-visible');
        $('.donation_monthly_3_value').addClass('is-active');
        //add donation value to data attribute on donate button
        const newDonationValue = $('.donation_monthly_3_value').data(
            'widget-option-value'
        );
        $('#donationButton').attr('data-donation-value', newDonationValue);
    });
    //handle the clicking of monthly donation other
    $('.donation_monthly_other_value').click(function() {
        $('.donation_monthly.donation_monthly_button').removeClass('is-active');
        $('.donation_description.donation_monthly')
            .removeClass('is-visible')
            .removeClass('is-active');
        $('.donation_monthly_other_description').addClass(
            'is-visible is-active'
        );
        $('input.donation_value').addClass('is-visible');
        $('.donation_monthly_other_value').addClass('is-active');
        //add donation value to data attribute on donate button
        const newDonationValue = $('#donationValue').val();
        $('#donationButton').attr('data-donation-value', newDonationValue);
    });

    $('#donationButton').click(function(event) {
        event.preventDefault();
        let urlBody = $('#donationButton').data('campaign-url');
        let urlParamAmount = $('#donationButton').data('donation-value');
        let urlParamFrequency = $('#donationButton').data('donation-type');
        const newURL =
            urlBody +
            '?v1=true' +
            '&amount=' +
            urlParamAmount +
            '&frequency=' +
            urlParamFrequency;
        window.open(newURL, '_blank');
    });
});
