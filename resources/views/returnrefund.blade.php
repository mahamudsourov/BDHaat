<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return & Refund Policy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap, Google Fonts, FontAwesome --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/returnrefund.css') }}">
</head>
<body>

    <div class="return-container">
        <h2><i class="fas fa-undo-alt me-2"></i>Return & Refund Policy</h2>
        <p class="mt-3">Your satisfaction is our priority. If you’re not happy with your purchase, we’re here to help.</p>

        {{-- Accordion --}}
        <div class="accordion mt-4" id="faqAccordion">

            {{-- Return Eligibility --}}
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        <i class="fas fa-box-open me-2"></i> Return Eligibility
                    </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-check-circle"></i> Return within 7 days of delivery</li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i> Unused items in original packaging</li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i> Valid receipt or order number required</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Non-returnable Items --}}
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        <i class="fas fa-ban me-2"></i> Non-returnable Items
                    </button>
                </h4>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-times-circle"></i> Perishable goods (e.g., food)</li>
                            <li class="list-group-item"><i class="fas fa-times-circle"></i> Digital products or downloads</li>
                            <li class="list-group-item"><i class="fas fa-times-circle"></i> Gift cards or free items</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Refund Process --}}
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        <i class="fas fa-credit-card me-2"></i> Refund Process
                    </button>
                </h4>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Once your return is received and inspected, we’ll notify you. If approved, your refund will be processed to your original payment method within 5–7 business days.</p>
                    </div>
                </div>
            </div>

            {{-- Need Help --}}
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        <i class="fas fa-headset me-2"></i> Need Help?
                    </button>
                </h4>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>If you need assistance with your return, please contact our <a href="{{ route('customercare') }}">Customer Care</a> team. We’re happy to assist you.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Bootstrap JS + Custom JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/returnrefund.js') }}"></script>
</body>
</html>
