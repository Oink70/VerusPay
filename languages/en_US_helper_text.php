<?php 
/**
 * VerusPay Verus Gateway English US Language
 *
 * Language file for English US
 *
 * @package VerusPay Verus Gateway\Language
 * @version 0.3.2
 * @author    J Oliver Westbrook
 * @category  Cryptocurrency
 * @copyright Copyright (c) 2019, John Oliver Westbrook
 * 
 * ====================
 * 
 * The MIT License (MIT)
 * 
 * Copyright (c) 2019 John Oliver Westbrook
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * ====================
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Defines all helper text in en_US - use as $wc_veruspay_text_helper['']
global $wc_veruspay_text_helper;
$wc_veruspay_text_helper = array(
	'method_desc' => 'Allows purchases to be made using cryptocurrency.',
	'refresh' => 'Refresh',
	'price' => 'Price',
	'exchange_rate' => 'Exchange Rate',
	'awaiting_payment' => 'Awaiting payment',
	'payment_button' => 'Proceed to Crypto Payment',
	'severe_error' => 'Error! Please Choose A Different Payment Method or Contact the Store Owner.',
	'order_processing' => 'Order Complete',
	'total_in' => 'Total in ',
	'check_status' => 'Check Status',
	'price_powered_by' => 'Price via VerusPay API',
	'title_qr_invoice' => 'VerusMobile Invoice',
	'title_qr_address' => 'Payment Address',
	'title_on_hold' => 'Please Send Exactly ',
	'title_ordered' => 'Order Pending Payment',
	'title_pending' => 'Order Pending Confirmations',
	'title_paid'	=> 'Payment Received, Awaiting Confirmations',
	'title_completed' => 'Your Order is Complete!',
	'title_cancelled' => 'This Order Has Been Cancelled',
	'msg_sapling_tooltip' => 'Check to enable privacy payment using a "zs" Sapling address.',
	'msg_valid_for' => 'Valid for',
	'msg_noscript_refresh' => 'Please click Refresh above to ensure you have the most up-to-date price before your purchase.',
	'msg_send_on_purchase' => 'Upon purchase send ',
	'msg_order_cancel_timeout' => 'Payment not received within time limit of ',
	'msg_payment_amount' => 'Payment Amount',
	'msg_your_order_num' => 'Your order number ',
	'msg_has_cancelled_reason' => ' has been cancelled. ',
	'msg_thank_payment_of' => 'Thank you, your payment of ',
	'msg_received' => ' has been received!',
	'msg_modal_gen_addr' => 'Generating Unique Payment Address',
	'msg_modal_update_price' => 'Updating Price Data',
	'msg_sapling_label' => 'Enable Privacy',
	'msg_waiting_payment' => 'Waiting for payment, please send within ',
	'msg_confirming_payment' => 'Waiting for full block confirmations. Progress: ',
	'admin_wallet_off_addroff' => '<strong>Wallet Status: </strong><span style="color:gray">Disabled</span><br /><span style="color:red"><strong>Enter a valid IP/Path in the Wallet IP field to enable this Wallet.</strong></span>',
	'admin_wallet_off_noaddr' => '<strong>Wallet Status: </strong><span style="color:gray">Disabled</span><br /><span style="color:red"><strong>Enter either a valid IP/path in the Wallet IP field or valid transparent addresses in the Store Addresses field to enable this Wallet.</strong></span>',
	'admin_wallet_off_addr' =>'<strong>Wallet Status: </strong><span style="color:gray">Manual Mode</span><br /><strong>Wallet Status: </strong><span style="color:red">Unreachable</span><span> - Did You Configure Wallet & IP/Path Correctly?</span>',
	'admin_wallet_on_noaddr' => '<strong>Wallet Status: </strong><span style="color:green">Reachable</span><br /><span style="color:red"><strong>- Enter valid transparent addresses in the Store Addresses field -</strong></span>',
	'admin_wallet_on' => '<strong>Wallet Status: </strong><span style="color:green">Reachable</span><br />',
	'admin_wallet_online' => '<strong>Wallet Status: </strong><span style="color:green">Operational</span><br />',
);

