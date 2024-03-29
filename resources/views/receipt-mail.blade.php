<!DOCTYPE html>
<!--
  Invoice template by invoicebus.com
  To customize this template consider following this guide https://invoicebus.com/how-to-create-invoice-template/
  This template is under Invoicebus Template License, see https://invoicebus.com/templates/license/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Neon | Receipt</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Invoicebus Invoice Template">
    <meta name="author" content="Invoicebus">

    <meta name="template-hash" content="baadb45704803c2d1a1ac3e569b757d5">

    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=cyrillic,cyrillic-ext,latin,greek-ext,greek,latin-ext,vietnamese");
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font: inherit;
        font-size: 100%;
        vertical-align: baseline;
        }

        html {
        line-height: 1;
        }

        ol, ul {
        list-style: none;
        }

        table {
        border-collapse: collapse;
        border-spacing: 0;
        }

        caption, th, td {
        text-align: left;
        font-weight: normal;
        vertical-align: middle;
        }

        q, blockquote {
        quotes: none;
        }
        q:before, q:after, blockquote:before, blockquote:after {
        content: "";
        content: none;
        }

        a img {
        border: none;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
        display: block;
        }

        /* Invoice styles */
        /**
        * DON'T override any styles for the <html> and <body> tags, as this may break the layout.
        * Instead wrap everything in one main <div id="container"> element where you may change
        * something like the font or the background of the invoice
        */
        html, body {
        /* MOVE ALONG, NOTHING TO CHANGE HERE! */
        }

        /** 
        * IMPORTANT NOTICE: DON'T USE '!important' otherwise this may lead to broken print layout.
        * Some browsers may require '!important' in oder to work properly but be careful with it.
        */
        .clearfix {
        display: block;
        clear: both;
        }

        .hidden {
        display: none;
        }

        b, strong, .bold {
        font-weight: bold;
        }

        #container {
        font: normal 13px/1.4em 'Open Sans', Sans-serif;
        margin: 0 auto;
        min-height: 1158px;
        background: #f5fbfd url("../img/bg.png") 0 0 no-repeat;
        background-size: 100% auto;
        color: #5B6165;
        position: relative;
        }

        .center{
            width: 100%;
            margin: auto;
            /*min-width: 500px;*/
        }

        #memo {
        padding-top: 50px;
        margin: 0 110px 0 60px;
        border-bottom: 1px solid #ddd;
        height: 115px;
        }
        #memo .logo {
        float: left;
        margin-right: 20px;
        }
        #memo .logo img {
        width: auto;
        height: 65px;
        }
        #memo .company-info {
        float: right;
        text-align: right;
        }
        #memo .company-info > div:first-child {
        line-height: 1em;
        font-weight: bold;
        font-size: 22px;
        color: #273272;
        }
        #memo .company-info span {
        font-size: 11px;
        display: inline-block;
        min-width: 20px;
        }
        #memo:after {
        content: '';
        display: block;
        clear: both;
        }

        #invoice-title-number {
        font-weight: bold;
        margin: 30px 0;
        }
        #invoice-title-number span {
        line-height: 0.88em;
        display: inline-block;
        min-width: 20px;
        }
        #invoice-title-number #title {
        text-transform: uppercase;
        padding: 0px 2px 0px 60px;
        font-size: 30px;
        background: #0086AD;
        color: white;
        }
        #invoice-title-number #number {
        margin-left: 10px;
        font-size: 30px;
        position: relative;
        /*top: -5px;*/
        }

        #client-info {
        float: left;
        margin-left: 60px;
        min-width: 220px;
        }
        #client-info > div {
        margin-bottom: 3px;
        min-width: 20px;
        }
        #client-info span {
        display: block;
        min-width: 20px;
        }
        #client-info > span {
        text-transform: uppercase;
        }

        table {
        table-layout: fixed;
        }
        table th, table td {
        vertical-align: top;
        word-break: keep-all;
        word-wrap: break-word;
        }

        #items {
        margin: 35px 30px 0 30px;
        }
        #items .first-cell, #items table th:first-child, #items table td:first-child {
        width: 40px !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        text-align: right;
        }
        #items table {
        border-collapse: separate;
        width: 100%;
        }
        @media only screen and (max-width: 600px) {
        .hidden-sm {
            display: none;
        }
        #memo{
            height: 160px;
        }
        }
        #items table th {
        font-weight: bold;
        padding: 5px 8px;
        text-align: right;
        background: #273272;
        color: white;
        text-transform: uppercase;
        }
        #items table th:nth-child(2) {
        width: 30%;
        text-align: left;
        }
        #items table th:last-child {
        text-align: right;
        }
        #items table td {
        padding: 9px 8px;
        text-align: right;
        border-bottom: 1px solid #ddd;
        }
        #items table td:nth-child(2) {
        text-align: left;
        }

        #sums {
        margin: 25px 30px 0 0;
        background: url("../img/total-stripe-turquoise.png") right bottom no-repeat;
        }
        #sums table {
        float: right;
        }
        #sums table tr th, #sums table tr td {
        min-width: 100px;
        padding: 9px 8px;
        text-align: right;
        }
        #sums table tr th {
        font-weight: bold;
        text-align: left;
        padding-right: 35px;
        }
        #sums table tr td.last {
        min-width: 0 !important;
        max-width: 0 !important;
        width: 0 !important;
        padding: 0 !important;
        border: none !important;
        }
        #sums table tr.amount-total th {
        text-transform: uppercase;
        }
        #sums table tr.amount-total th, #sums table tr.amount-total td {
        font-size: 15px;
        font-weight: bold;
        }
        #sums table tr:last-child th {
        text-transform: uppercase;
        }
        #sums table tr:last-child th, #sums table tr:last-child td {
        font-size: 15px;
        font-weight: bold;
        color: white;
        }

        #invoice-info {
        float: left;
        margin: 50px 40px 0 60px;
        }
        #invoice-info > div > span {
        display: inline-block;
        min-width: 20px;
        min-height: 18px;
        margin-bottom: 3px;
        }
        #invoice-info > div > span:first-child {
        color: black;
        }
        #invoice-info > div > span:last-child {
        color: #aaa;
        }
        #invoice-info:after {
        content: '';
        display: block;
        clear: both;
        }

        #terms {
        float: left;
        margin-top: 50px;
        }
        #terms .notes {
        min-height: 30px;
        min-width: 50px;
        color: #273272;
        }
        #terms .payment-info div {
        margin-bottom: 3px;
        min-width: 20px;
        }

        .thank-you {
        margin: 10px 20px 30px 0;
            display: inline-block;
            min-width: 20px;
            text-transform: uppercase;
            font-weight: bold;
            line-height: 0.88em;
            float: right;
            padding: 13px 25px;
            font-size: 15px;
            border-radius: 5px;
            background: #39d02f;
            color: white;
        }

        .ib_bottom_row_commands {
        margin-left: 30px !important;
        }

        /**
        * If the printed invoice is not looking as expected you may tune up
        * the print styles (you can use !important to override styles)
        */
        @media print {
        /* Here goes your print styles */
        }
    </style>
  </head>
  <body>
      <div class="center">
        <div id="container">
          <section id="memo">
            <div class="logo">
              <img src="logo.png" />
            </div>
            
            <div class="company-info">
              <div class="hidden-sm">Neon</div>
    
              <br />
              
              <span>TJAC building, Southern View Estate</span>
              <span>Lekki, Lagos</span>
              <span>Nigeria</span>
    
              <br />
              
              <span>08161523473</span>
              <span>info@neon.com</span>
            </div>
    
          </section>
    
          <section id="invoice-title-number">
          
            <span id="title">Receipt</span>
            <span id="number">{{$receipt_number}}</span>
            
          </section>
          
          <div class="clearfix"></div>
          
          <section id="client-info">
            <div>
              <span class="bold"><?php echo $row['candidate_name']; ?></span>
            </div>
            
            <div>
              <span><?php echo $row['candidate_address']; ?></span>
            </div>
            
            
            
            <div>
              <span><?php echo $row['candidate_phone']; ?></span>
            </div>
            
            <div>
              <span><?php echo $row['candidate_email']; ?></span>
            </div>
            
            
          </section>
          
          <div class="clearfix"></div>
          
          <section id="items">
            
            <table cellpadding="0" cellspacing="0">
            
              <tr>
                <th>Sn</th> <!-- Dummy cell for the row number and row commands -->
                <th>Item</th>
                <th>Total</th>
              </tr>
              
              <tr data-iterate="item">
                <td>1</td> <!-- Don't remove this column as it's needed for the row commands -->
                <td>Agency registration fee</td>
                <td>₦10,000</td>
              </tr>
              
            </table>
            
          </section>
          
          <section id="sums">
          
            <table cellpadding="0" cellspacing="0">
              <tr>
                <th>Subtotal</th>
                <td>₦10,000</td>
              </tr>
              
              
              
              <!-- You can use attribute data-hide-on-quote="true" to hide specific information on quotes.
                   For example Invoicebus doesn't need amount paid and amount due on quotes  -->
              <tr data-hide-on-quote="true">
                <th>Paid</th>
                <td>0.00</td>
              </tr>
              
              <tr data-hide-on-quote="true">
                <th>Total</th>
                <td>₦10,000</td>
              </tr>
              
            </table>
    
            <div class="clearfix"></div>
            
          </section>
          
          <div class="clearfix"></div>
    
          <section id="invoice-info">
            <div>
              <span>Issue date</span> <span><?php echo $row['created']; ?></span>
            </div>
            <div>
              <span>Due date</span> <span><?php echo $row['due_date']; ?></span>
            </div>
    
            <br />
    
            
          </section>
          
          <section id="terms">
    
            <div class="notes">Kindly click the pay button below to pay agency registration fee online <br/>on or before the due date to avoid loosing this opportunity</div>
    
            <br />
    
            
          </section>
    
          <div class="clearfix"></div>
    
          <div class="clearfix"></div>
        </div>
    </div>

  </body>
</html>
