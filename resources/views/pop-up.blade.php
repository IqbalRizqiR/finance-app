<div id="modal" class="box--popup">
                    <h2>Savings Log</h2>
                    <div class="box--control">
                        <div class="col-md-6">
                            <button class="button--control increase active" onclick="increaseValue()">+ Increase</button>
                        </div>
                        <div class="col-md-6">
                            <button class="button--control decrease" onclick="decreaseValue()">- Decrease</button>
                        </div>
                    </div>
                    <div class="popup---input">
                        <form action="{{ route('postCreate') }}" method="POST">
                            @csrf
                            <input type="text" hidden name="transaction_type" id="transaction_type" value="income">
                            <fieldset>
                                <legend>Nominal</legend>
                                <div class="savings--icon">
                                    <i class="fas fa-rupiah-sign icon1"></i>
                                    <input type="number" name="amount" name="amount" step="0.01" placeholder="XXX.XXX" />
                                </div>
                            </fieldset>
                            <fieldset class="description">
                                <legend>Deskripsi</legend>
                                <div class="savings--icon">
                                    <i class="fa-solid fa-list icon2"></i>
                                    <input type="text" step="0.01" name="description" placeholder="Description" />
                                </div>
                            </fieldset>
                            <fieldset class="description">
                                <legend>Money Source</legend>
                                <div class="savings--icon">
                                    <i class="fa-solid fa-list icon2"></i>
                                    <select name="source_id" id="">
                                        <option value="" selected>Select Source</option>
                                        @foreach ($sources as $source)
                                            <option value="{{ $source->id }}">{{ $source->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>
                            <div class="button--bottom--input">
                                <button onclick="closeModal()" class="button--control">Cancel</button>
                                <button class="button--control">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

