<?php
/**
 * Webkul Software.
 *
 * @category Webkul
 * @package Opencart Module Tutorial
 * @author Webkul
 * @license https://store.webkul.com/license.html
 */

// Text
$_['text_title'] = 'Crypto main gateway';
$_['text_desciption'] = '
<div style="display: flex; justify-content: space-between;">
    <select id="selectOptionCryptoManual" name="selectOptionCryptoManual">
        <option value="option1">BTC</option>
        <option value="option2">ETH</option>
        <option value="option8">USDT (TRC20)</option>
        <option value="option9">USDT (ERC20)</option>
        <option value="optionBNB">BNB (BEP20)</option>
        <option value="option4">BCH</option>
        <option value="optionBCHBlockchain">BCH (Blockchain wallet)</option>
        <option value="option3">LTC</option>
        <option value="option12">SOL</option>
        <option value="optionXRP">XRP</option>
        <option value="optionUsdCoin">USD Coin (ERC20)</option>
        <option value="optionDAI">DAI (ERC20)</option>
        <option value="EthClassic">ETH Classic</option>
        <option value="option5">XLM</option>
        <option value="optioncardano">ADA</option>
        <option value="option15">DOGE</option>
        <option value="optionShiba">SHIBA</option>
        <option value="optionAvax">AVAX</option>
        <option value="option13">DOT</option>
        <option value="optionTron">TRON or TRX (TRC20)</option>
        <option value="optionChainlink">Chainlink or LINK (ERC20)</option>
        <option value="option14">MATIC or POLYGON</option>
        <option value="optionTon">TON</option>
    </select>
    <div style="text-align: right;">
        <span id="timer_Binance_manual_payment_gateway">30:00</span>
    </div>
</div>
<div id="option1crypto" class="binance_manual_payment_selection_content" style="display: none;">
    <div class="binance_manual_payment_QR_and_Info">
        <div class="binance_manual_payment_QR_image">
            <img src="https://berdl.com/wp-content/uploads/2024/04/BTC.png">
        </div>
        <div class="binance_manual_payment_text">
            <p>
                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
            </p>
        </div>
    </div>
    <div class="binance_manual_payment_copyField">
       
        <p id="BTHwalletaddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
             <span style="color:gray;">address: </span> 1GZU9ghLqcAmdH4isQhM7kfNKCE5QWLfZ4
        </p>
        <img onclick="copyTextClipboardBTHcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
    </div>

    <div class="Binance_manual_payment_basic_info">
        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
        and send your order amount to our wallet then click <strong>"place order"</strong> button below.</p>
        <p>Your order will be detected and your download link will arrive into your inbox.</p>
        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
    </div>
</div>


    <div id="option2crypto" class="binance_manual_payment_selection_content" style="display: none;">



                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/ETH.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="EthereumFullcrypto" style="display: none;">0x8af09b0b7a064d467a130f8dbebe3da1580031c1</p>
                        <p id="ETHwalletaddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                            <span style="color:gray;">address: </span> 0x8af09b0b7a064d467a130f8dbebe3da1580031c1
                        </p>
                        <img onclick="copyTextClipboardETHcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                 <div id="option3crypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/LTC.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                       
                        <p id="LTCFulladdresscrypto" style="display: none;">LNaqLTmNk51P5SSpbykeiafYL94QSDtpDU</p>
                        <p id="LTCwalletaddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                            <span style="color:gray;">address:  </span>LNaqLTmNk51P5SSpbykeiafYL94QSDtpDU
                        </p>

                        <img onclick="copyTextClipboardLTCcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>

   <div id="option8crypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/USDT-TRX.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">

                        <p id="USDTTRCFulladdresscrypto" style="display: none;">TWdJEbZWDuLT9Q7P1ppwEPDXW26U6NqMyi</p>
                        <p id="USDTTRCwalletaddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                           <span style="color:gray;">address:  </span>TWdJEbZWDuLT9Q7P1ppwEPDXW26U6NqMyi
                        </p>

                        <img onclick="copyTextClipboardUSDTTRCcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                  <div id="option4crypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/BCH.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="BCHFulladdresscrypto" style="display: none;">1GZU9ghLqcAmdH4isQhM7kfNKCE5QWLfZ4</p>
                        <p id="BCHwalletaddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                           <span style="color:gray;">address:  </span>1GZU9ghLqcAmdH4isQhM7kfNKCE5QWLfZ4
                        </p>
                        <img onclick="copyTextClipboardBCHcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                   <div id="option5crypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/XLM.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="XLMFulladdresscrypto" style="display: none;">GABFQIK63R2NETJM7T673EAMZN4RJLLGP3OFUEJU5SZVTGWUKULZJNL6</p>
                        <p id="XLMwalletaddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                            <span style="color:gray;">address:  </span>GABFQIK63R2NETJM7T673EAMZN4RJLLGP3OFUEJU5SZVTGWUKULZJNL6
                        </p>
                        <img onclick="copyTextClipboardXLMcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="StellarMemoFullAddresscrypto" style="display: none;">342560046</p>
                        <p id="StellarMemoAddresscrypto"><span style="color:gray;">memo: </span>342560046</p>
                        <img onclick="copyTextClipboardStellarMemocrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                <div id="optionShibacrypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/SHIB.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="ShibaFulladdresswalletcrypto" style="display: none;">0x8af09b0b7a064d467a130f8dbebe3da1580031c1</p>
                        <p id="Shibawalletaddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                           <span style="color:gray;">address:  </span>0x8af09b0b7a064d467a130f8dbebe3da1580031c1
                        </p>
                        <img onclick="copyTextClipboardShibacrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>


  <div id="optionUsdCoincrypto" class="binance_manual_payment_selection_content" style="display: none;">
                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/USDC.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="UsdCoinFulladdresswalletcrypto" style="display: none;">0x8af09b0b7a064d467a130f8dbebe3da1580031c1</p>
                        <p id="UsdCoinawalletaddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                           <span style="color:gray;">address:  </span>0x8af09b0b7a064d467a130f8dbebe3da1580031c1
                        </p>
                        <img onclick="copyTextClipboardUsdCoincrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                  <div id="optionXRPcrypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/XRP.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="XrpFulladdresswalletcrypto" style="display: none;">rNxp4h8apvRis6mJf9Sh8C6iRxfrDWN7AV</p>
                        <p id="Xrpawalletaddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                           <span style="color:gray;">address:  </span>rNxp4h8apvRis6mJf9Sh8C6iRxfrDWN7AV
                        </p>
                        <img onclick="copyTextClipboardXrpcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="RippleMemoFullAddresscrypto" style="display: none;">377214741</p>
                        <p id="RippleMemoAddresscrypto"><span style="color:gray;">memo: </span>377214741</p>
                        <img onclick="copyTextClipboardRippleMemocrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                        <div id="optioncardanocrypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/ADA.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="AdaFulladdresswallet1crypto" style="display: none;">addr1v96zugsvfhgf7tg3rg66vvc90w3ugp5k04t9cfuw0a660dgyvwujt</p>
                        <p id="ADAwalletaddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                          <span style="color:gray;">address:  </span>addr1v96zugsvfhgf7tg3rg66vvc90w3ugp5k04t9cfuw0a660dgyvwujt
                        </p>
                        <img onclick="copyTextClipboardAdacrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                  <div id="option12crypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/SOL.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="SolanaFulladdresswalletcrypto" style="display: none;">3tNpDPGkK3wypazb6NFC2JmxbcNttVoafLhoAHSjY78p</p>
                        <p id="SolanaWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                           <span style="color:gray;">address:  </span>3tNpDPGkK3wypazb6NFC2JmxbcNttVoafLhoAHSjY78p
                        </p>
                        <img onclick="copyTextClipboardSolcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                  <div id="option13crypto" class="binance_manual_payment_selection_content" style="display: none;">
                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/DOT.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="DotFulladdresswalletcrypto" style="display: none;">14JftsJ3Rr1ZxtTuTpTYaGio4EprJbYqdz6n6ngx7aSAUkXz</p>
                        <p id="PolkadotWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                          <span style="color:gray;">address:  </span>14JftsJ3Rr1ZxtTuTpTYaGio4EprJbYqdz6n6ngx7aSAUkXz
                        </p>
                        <img onclick="copyTextClipboardDotcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                <div id="option14crypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/MATIC.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="MaticFulladdresswalletcrypto" style="display: none;">0x8af09b0b7a064d467a130f8dbebe3da1580031c1</p>
                        <p id="MaticWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                        <span style="color:gray;">address:  </span>0x8af09b0b7a064d467a130f8dbebe3da1580031c1
                        </p>
                        <img onclick="copyTextClipboardMaticcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                      <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                 <div id="option15crypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/DOGE.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="DogeFulladdresswalletcrypto" style="display: none;">DHwMqPfZZ5nAZbpuctK1ibd1uTQNu3hWBh</p>
                        <p id="DogeWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                        <span style="color:gray;">address:  </span>DHwMqPfZZ5nAZbpuctK1ibd1uTQNu3hWBh
                        </p>
                        <img onclick="copyTextClipboardDogecrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                     <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                      <div id="option9crypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/USDT-ETH.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="UsdtErcFulladdresswalletcrypto" style="display: none;">0x8af09b0b7a064d467a130f8dbebe3da1580031c1</p>
                        <p id="UsdtErcWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                        <span style="color:gray;">address:  </span>0x8af09b0b7a064d467a130f8dbebe3da1580031c1
                        </p>
                        <img onclick="copyTextClipboardUsdtErccrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                     <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                 <div id="optionBNBcrypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/BNB.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="BNBFulladdresswalletcrypto" style="display: none;">0x8af09b0b7a064d467a130f8dbebe3da1580031c1</p>
                        <p id="BNBWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                           <span style="color:gray;">address:  </span>" 0x8af09b0b7a064d467a130f8dbebe3da1580031c1
                        </p>
                        <img onclick="copyTextClipboardBNBcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                     <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                  <div id="optionBCHBlockchaincrypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://gotempl.pro/wp-content/uploads/2024/03/photo_2024-03-09_15-24-45-100x100.jpg">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">

                        <p id="BCHBFulladdresswalletcrypto" style="display: none;">qrlek7w7fv0wrpezceky8wc5779v7dpmxypy6ept26</p>
                        <p id="BCHBWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                          <span style="color:gray;">address:  </span>qrlek7w7fv0wrpezceky8wc5779v7dpmxypy6ept26
                        </p>
                        <img onclick="copyTextClipboardBCHBcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                   <div id="optionDAIcrypto" class="binance_manual_payment_selection_content" style="display: none;">
                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/DAI.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="DaiFulladdresswalletcrypto" style="display: none;">0x8af09b0b7a064d467a130f8dbebe3da1580031c1</p>
                        <p id="DaiWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                           <span style="color:gray;">address:  </span>0x8af09b0b7a064d467a130f8dbebe3da1580031c1
                        </p>
                        <img onclick="copyTextClipboardDaicrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                 <div id="EthClassiccrypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/ETC.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="EthClassicFulladdresswalletcrypto" style="display: none;">0x8af09b0b7a064d467a130f8dbebe3da1580031c1</p>
                        <p id="EthClassicWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                         <span style="color:gray;">address:  </span>0x8af09b0b7a064d467a130f8dbebe3da1580031c1
                        </p>
                        <img onclick="copyTextClipboardEthClassiccrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                     <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                <div id="optionAvaxcrypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/AVAX.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="AvaxFulladdresswalletcrypto" style="display: none;">X-avax1anekg4ep0lgvwtvqc69ss2nwxpqq9hjt50x9vx</p>
                        <p id="AvaxWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                           <span style="color:gray;">address:  </span>X-avax1anekg4ep0lgvwtvqc69ss2nwxpqq9hjt50x9vx
                        </p>
                        <img onclick="copyTextClipboardAvaxcrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                <div id="optionTroncrypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/TRX.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="TronFulladdresswalletcrypto" style="display: none;">TWdJEbZWDuLT9Q7P1ppwEPDXW26U6NqMyi</p>
                        <p id="TronWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                            <span style="color:gray;">address:  </span>TWdJEbZWDuLT9Q7P1ppwEPDXW26U6NqMyi
                        </p>
                        <img onclick="copyTextClipboardTroncrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                      <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                
                  <div id="optionChainlinkcrypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/LINK.png">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">

                        <p id="ChainFulladdresswalletcrypto" style="display: none;">0x8af09b0b7a064d467a130f8dbebe3da1580031c1</p>
                        <p id="ChainWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                            <span style="color:gray;">address:  </span>0x8af09b0b7a064d467a130f8dbebe3da1580031c1
                        </p>
                        <img onclick="copyTextClipboardChaincrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>
                
                <div id="optionToncrypto" class="binance_manual_payment_selection_content" style="display: none;">

                    <div class="binance_manual_payment_QR_and_Info">
                        <div class="binance_manual_payment_QR_image">
                            <img src="https://berdl.com/wp-content/uploads/2024/04/photo_2024-04-24_14-50-33.jpg">
                        </div>
                        <div class="binance_manual_payment_text">
                            <p>
                                Hi Binancian :) <br> <strong>scan QR</strong> <br> or <br> <strong>copy wallet</strong>
                            </p>
                        </div>
                    </div>
                    <div class="binance_manual_payment_copyField">
                        <p id="TonFulladdresswalletcrypto" style="display: none;">EQDhtHxweKvtYJMOaEjL6tPFRrFy13pAPFuEGuaH77gJrRbH</p>
                        <p id="TonWalletAddresscrypto" class="Binance_simple_payment_gateway_wallet_address">
                          <span style="color:gray;">address:  </span>EQDhtHxweKvtYJMOaEjL6tPFRrFy13pAPFuEGuaH77gJrRbH
                        </p>
                        <img onclick="copyTextClipboardToncrypto()" class="copyIMG binance_manual_copyIcon" src="https://img.icons8.com/material-outlined/24/copy.png">
                    </div>
                    <div class="Binance_manual_payment_basic_info">
                        <p>Copy wallet address or scan the QR code <br> <span style="color: gray; font-size:10px;">(open Binance app > spot > withdraw > select wallet > send via Crypto Network > QR scanner)</span><br>
                            and send your order amount to our wallet then click <strong>"place order" </strong> button below.</p>
                        <p>Your order will be detected and your download link will arrive into your inbox.</p>
                        <p>The fees are minimal and a little overpayment or underpayment is not an issue with us.</p>
                    </div>
                </div>

';

$_['text_notice'] = 'Your order will not ship until we receive payment.';
?>
