<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agreement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 12px;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        p {
            margin: 10px 0;
        }
        .section-title {
            font-weight: bold;
            margin-top: 20px;
        }
        .content {
            margin-left: 20px;
        }
        .signature-section {
            margin-top: 30px;
            border-top: 1px solid #000;
            padding-top: 10px;
        }
    </style>
</head>
<body>
<!-- <div class="logo">
<img src="{{ url('assets/images/logo.webp') }}" alt="Amz Book Publish Logo" width="200px">
</div> -->
    <h1>Social Media Management Agreement
    </h1>

    <p>This Social Media Management Agreement (the "Agreement") is made and entered into on this {{ \Carbon\Carbon::parse($date)->format('F d, Y') }} by and between:</p>
    <p><strong>Zenesa Digital</strong><br>
    Start Date: July 7, 2025<br>
    End Date:  January 31, 2026<br>
    Contact: (469) 608-8053<br>
    Email: info@zenesadigital.com</p>

    <p>AND</p>

    <p><strong>Client Name:</strong> {{ $name }}<br>
    <strong>Client Email:</strong> {{ $email }}<br>
    <strong>Client Contact:</strong> {{ $contact }}<br>
    <strong>Package:</strong> {{ $address }}<br>
   
    <div class="section-title">1. SERVICES</div>
    <div class="content">
        <p>The Agency agrees to provide social media management services as outlined in the agreed-upon scope of work ("SOW"). Services are focused on organic marketing efforts and do not include paid advertisements or sponsored campaigns unless otherwise specified in the SOW.</p>
        <ul>
            <li>{!! nl2br(e($scope_of_services)) !!}</li>
            
        </ul>
    </div>

    <div class="section-title">2. PAYMENT TERMS</div>
    <div class="content">
        <p><strong>1 Service Fee:</strong> The Client agrees to pay an initial fee of $ {{ $payment }} for the services outlined in Section 1.</p>
        <p><strong>2. Payment Plan:</strong> Payment shall be made as follows:</p>
        <ul>
            <li>{!! nl2br(e($payment_terms)) !!}</li>
            

        </ul>
    </div>

    <div class="section-title">3. DELIVERABLES</div>
    <div class="content">
        <p>The Agency will provide the following deliverables each month:</p>
        <p>• 4 professionally edited and branded videos or reels</p>
        <p>• 12 custom-designed social media posts, including captions and hashtags</p>
    </div>

    <div class="section-title">4. Platforms Covered</div>
    <div class="content">
        <p>The social media management services will be provided for the following platforms:</p>
        <p>• Facebook</p>
        <p>• Instagram</p>
        <p>• TikTok</p>
        <p>• Youtube</p>
    </div>

    <div class="section-title">5. Intellectual Property and Ownership rights</div>
    <div class="content">
        <p>• Upon full payment, the Client will have full rights to use the final deliverables. The Agency retains the right to display the work in its portfolio or for marketing purposes.<br><br>
        • Any third-party elements (e.g., stock images, fonts) incorporated into the design may be subject to their respective licensing terms, and the Client is responsible for ensuring proper usage.</p>
    </div>

    <div class="section-title">6. Ownership & Rights</div>
    <div class="content">
        <p>• Upon final delivery and full payment, all content created under this Agreement will become the property of the Client.</p>
        <p>• Zenesa Digital retains the right to display the content for portfolio or promotional use unless otherwise agreed in writing.
        </p>
    </div>

    <div class="section-title">7. Termination</div>
    <div class="content">
        <p>In the event of termination, the Client will be responsible for payment for all work completed up to the date of termination.</p>
    </div>

    <div class="section-title">8. Confidentiality</div>
    <div class="content">
        <p>Both parties agree to maintain the confidentiality of any proprietary or confidential information shared during the course of this Agreement.</p>
    </div>

    <div class="section-title">9. Governing Law</div>
    <div class="content">
        <p>This Agreement shall be governed by and construed by the laws of the State of Texas, USA, without regard to its conflict of law principles.</p>
    </div>

    <div class="section-title">10. Entire Agreement</div>
    <div class="content">
        <p>This Agreement, including any SOWs and attachments, constitutes the entire agreement between the parties and supersedes any prior written or oral agreements..</p>
    </div>

    <div class="section-title">11. Dispute Resolution</div>
    <div class="content">
        <p>In the event of a dispute, both parties agree to attempt resolution through mediation before pursuing legal action.</p>
    </div>

    <div class="section-title">12. ENTIRE AGREEMENT</div>
    <div class="content">
        <p>This Agreement, including any SOWs and attachments, constitutes the entire agreement between the parties and supersedes any prior written or oral agreements.</p>
    </div>

    <div class="signature-section">
        <p><strong>Client Signature:</strong></p>
        <img src="{{ $signaturePath }}" width="200px" alt="Author's Signature">
    </div>

    <p>By signing below, both parties agree to the terms and conditions set forth in this Agreement.</p>

</body>
</html>
