<div id="modal" class="box--popup" style="height: 500px">
    <h2>Add Money Source</h2>
    <div class="popup---input">
        <form action="{{ route('moneyPost') }}" method="POST">
            @csrf
            <input type="number" hidden name="user_id" id="transaction_type" value="1">
            <fieldset>
                <legend>Nama Sumber Dana</legend>
                <div class="savings--icon">
                    <i class="fas fa-rupiah-sign icon1"></i>
                    <input type="text" name="name" step="0.01" placeholder="Nama Dana" />
                </div>
            </fieldset>
            <fieldset class="description">
                <legend>Balance</legend>
                <div class="savings--icon">
                    <i class="fa-solid fa-list icon2"></i>
                    <input type="number" step="0.01" name="balance" placeholder="Total Uang" />
                </div>
            </fieldset>
            <div class="button--bottom--input">
                <button onclick="closeModal()" type="button" class="button--control">Cancel</button>
                <button type="submit" class="button--control">Save</button>
            </div>
        </form>
    </div>
</div>
