<style>
    .block {
        display: inline-block;
        position: relative;
        width: 100%;
        margin-bottom: 30px;
        border-radius: 6px;
        color: rgba(0, 0, 0, 0.87);
        background: #fff;
        box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 20%), 0 1px 5px 0 rgb(0 0 0 / 12%);
    }

    .block-pricing {
        text-align: center;
    }

    .block-pricing .table {
        padding: 15px !important;
        margin-bottom: 0px;
    }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }

    .block-pricing .block-caption {
        margin-top: 30px;
    }

    .block-caption {
        font-weight: 700;
        font-family: "Lato", "Times New Roman", serif;
        color: #3C4857;
    }

    .block-pricing ul {
        list-style: none;
        padding: 0;
        max-width: 240px;
        margin: 10px auto;
    }

    .block-pricing ul li {
        color: #3C4857;
        text-align: center;
        padding: 12px 0;
        border-bottom: 1px solid rgba(153, 153, 153, 0.3);
    }

    .block-pricing ul li {
        color: #3C4857;
        text-align: center;
        padding: 12px 0;
        border-bottom: 1px solid rgba(153, 153, 153, 0.3);
    }

    .btn.btn-primary {
        color: #FFFFFF;
        background-color: linear-gradient(90deg, #946DFF 2.14%, #2AACEE 97.4%);
        border-radius: 5px;
        border-color: linear-gradient(90deg, #946DFF 2.14%, #2AACEE 97.4%);
        border-radius: 5px;
        box-shadow: 0 2px 2px 0 rgb(156 39 176 / 14%), 0 3px 1px -2px rgb(156 39 176 / 20%), 0 1px 5px 0 rgb(156 39 176 / 12%);
    }

    .btn.btn-round {
        border-radius: 30px;
    }

    .block .category:not([class*="text-"]) {
        color: #3C4857;
    }

    .block .table-primary {
        background: linear-gradient(180deg, #946DFF 0%, #2AACEE 97.09%);
        border-radius: 6px;
    }

    .block [class*="table-"] .category,
    .block [class*="table-"] .block-description {
        color: rgba(255, 255, 255, 0.8);
    }

    .block [class*="table-"] .block-caption a,
    .block [class*="table-"] .block-caption,
    .block [class*="table-"] .icon i {
        color: #FFFFFF;
    }

    .block-pricing [class*="table-"] ul li {
        color: #FFFFFF;
        border-color: rgba(255, 255, 255, 0.3);
    }

    .btn.btn-white {
        color: #3C4857;
        background-color: #fff;
        border-color: #fff;
        box-shadow: 0 2px 2px 0 rgb(153 153 153 / 14%), 0 3px 1px -2px rgb(153 153 153 / 20%), 0 1px 5px 0 rgb(153 153 153 / 12%);
    }

    .btn,
    .navbar>li>a.btn {
        border: none;
        border-radius: 3px;
        position: relative;
        padding: 12px 30px;
        margin: 10px 1px;
        font-size: 12px;
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: 0;
        will-change: box-shadow, transform;
        transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>

<div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <div class="block block-pricing">
                    <div class="table">
                        <h6 class="category">Personal</h6>
                        <h1 class="block-caption"><small>$</small>12<small>/mo</small></h1>
                        <ul>
                            <li><b>4 GB</b> Ram</li>
                            <li><b>7/24</b> Tech Support</li>
                            <li><b>40 GB</b> SSD Cloud Storage</li>
                            <li>Monthly Backups</li>
                            <li>Palo Protection</li>
                        </ul> <a href="#" class="btn btn-primary btn-round">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block block-pricing">
                    <div class="table table-primary">
                        <h6 class="category">Business</h6>
                        <h1 class="block-caption"><small>$</small>19<small>/mo</small></h1>
                        <ul>
                            <li><b>4 GB</b> Ram</li>
                            <li><b>7/24</b> Tech Support</li>
                            <li><b>40 GB</b> SSD Cloud Storage</li>
                            <li>Monthly Backups</li>
                            <li>Palo Protection</li>
                        </ul> <a href="#" class="btn btn-white btn-round">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Form-->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 card p-3 mb-3">
            <form>
                <div class="form-group">
                    <input type="email" class="form-control">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control">
                </div>
                <input id="payment_method" wire.model="payment_method" type="hidden" />
                <div id="card-element">
                </div>
                <button type="button" id="submit-button">Submit</button>
            </form>


        </div>

    </div>

</div>
@section('extract-js')
<script src="https://js.stripe.com/v3"></script>
<script>
    const stripe = Stripe("{{ env('STRIPE_KEY') }}");
    const elements = stripe.elements();
    const cardElement = elements.create('card', {
        classes: {
            base: 'StripeElement bg-white w-1/2 p-2 my-2 rounded-lg'
        }
    });
    cardElement.mount('#card-element');
    const cardButton = document.getElementById('submit-button');

    cardButton.addEventListener('click', async (e) => {
        e.preventDefault();
        const { paymentMethod, error } = await stripe.createPaymentMethod('card', cardElement);

        if (error) {
            console.log(error)
        } else {
            document.getElementById('payment-method').value = paymentMethod.id;
        }

    })
</script>
@endsection