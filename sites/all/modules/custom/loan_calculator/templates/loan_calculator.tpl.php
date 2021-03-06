<div class="row loan-information">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="loan-amount">Loan Amount</label>
            <small class="loan-amount-span"></small>
            <input type="text" class="form-control" id="loan-amount">
        </div>
        <div class="form-group">
            <label for="interest-rate">Annual Interest Rate</label>
            <input type="text" class="form-control" id="interest-rate">
        </div>
        <div class="form-group">
            <label for="number-of-months">Number of Months</label>
            <input type="text" class="form-control" id="number-of-months">
        </div>
        <div class="form-group">
            <label for="grace-period">Grace Period</label>
            <input type="text" class="form-control" id="grace-period">
        </div>
    </div>
    <div class="col-lg-8 loan-caluclator-table">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Total Payment</th>
                <th>Interest</th>
                <th>Principal</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot></tfoot>

    </table>

        <?php if (1): ?>
        <div class="pdf-export-ajax">
            <a href="#" target="_blank">
                <img typeof="foaf:Image" src="http://webloaner.ge/sites/all/modules/contrib/views_pdf/images/pdf.png"
                     alt="Physical Entity Statement Forms" title="Physical Entity Statement Forms">
            </a>
        </div>
        <?php endif ?>

    </div>
</div>
