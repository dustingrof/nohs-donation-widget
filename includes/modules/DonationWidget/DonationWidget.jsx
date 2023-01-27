// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';

class DonationWidget extends Component {
    static slug = 'nohs_donation_widget';

    render() {
        return (
            <Fragment>
                <h1 className='nohs-donation-widget-heading'>
                    {this.props.single_donation_1_value}
                </h1>
                <p>{this.props.single_donation_1_description}</p>
                <h1 className='nohs-donation-widget-heading'>
                    {this.props.single_donation_2_value}
                </h1>
                <p>{this.props.single_donation_2_description}</p>
                <h1 className='nohs-donation-widget-heading'>
                    {this.props.single_donation_3_value}
                </h1>
                <p>{this.props.single_donation_3_description}</p>

                <h1 className='nohs-donation-widget-heading'>
                    {this.props.regular_donation_1_value}
                </h1>
                <p>{this.props.regular_donation_1_description}</p>
                <h1 className='nohs-donation-widget-heading'>
                    {this.props.regular_donation_2_value}
                </h1>
                <p>{this.props.regular_donation_2_description}</p>
                <h1 className='nohs-donation-widget-heading'>
                    {this.props.regular_donation_3_value}
                </h1>
                <p>{this.props.regular_donation_3_description}</p>
            </Fragment>
        );
    }
}

export default DonationWidget;
