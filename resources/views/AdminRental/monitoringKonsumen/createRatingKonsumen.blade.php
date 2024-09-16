<div class="modal fade" id="ratingKonsumen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="exampleModalLabel">Rating Konsumen</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('adminRental.monitoringKonsumen.rating', $user->userId) }}" method="post">
                    @csrf
                    @include('form.createRatingForm')
                    <button type="button" onclick="formConfirmation('Simpan Rating?')" class="btn btn-block btn-primary">Beri Rating</button>
                </form>
            </div>
        </div>
    </div>
</div>
