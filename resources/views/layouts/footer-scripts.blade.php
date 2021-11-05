
<script src="{{ asset('insp/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('insp/js/popper.min.js') }}"></script>
<script src="{{ asset('insp/js/bootstrap4.js') }}"></script>
<script src="{{ asset('insp/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('insp/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('insp/js/inspinia.js') }}"></script>
<script src="{{ asset('insp/js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('insp/js/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('js/pikaday.js') }}"></script>
<script src="{{ asset('js/moments.js') }}"></script>
@livewireScripts
<script>
    @if(\Illuminate\Support\Facades\Session::has('changePassword'))
        $('#changePassword').modal('show');
    @endif

    Livewire.on('toast', (type, message, refresh = 0) => {
        if (refresh) {
            location.reload();
        }
        if(type === 'suc') {
            toastr.success(message);
        }
        if (type === 'warn'){
            toastr.warning(message);
        }
        if (type === 'err'){
            toastr.error(message);
        }
    });

    Livewire.on('jam', (formParams) => {

        const form = document.createElement("form");
        const element1 = document.createElement("input");
        const element2 = document.createElement("input");
        const element3 = document.createElement("input");
        const element4 = document.createElement("input");
        const element5 = document.createElement("input");
        const element6 = document.createElement("input");
        const element7 = document.createElement("input");
        const element8 = document.createElement("input");
        const element9 = document.createElement("input");
        const element10 = document.createElement("input");

        form.method = "POST";
        form.action = formParams.action;

        element1.value = formParams.product_id;
        element1.name = "product_id";
        element1.type = "hidden";
        form.appendChild(element1);

        element2.value = formParams.pay_item_id;
        element2.name = "pay_item_id";
        element2.type = "hidden";
        form.appendChild(element2);

        element3.value = formParams.amount;
        element3.name = "amount";
        element3.type = "hidden";
        form.appendChild(element3);

        element4.value = formParams.currency;
        element4.name = "currency";
        element4.type = "hidden";
        form.appendChild(element4);

        element5.value = formParams.site_redirect_url;
        element5.name = "site_redirect_url";
        element5.type = "hidden";
        form.appendChild(element5);

        element6.value = formParams.txn_ref;
        element6.name = "txn_ref";
        element6.type = "hidden";
        form.appendChild(element6);

        element7.value = formParams.cust_name;
        element7.name = "cust_name";
        element7.type = "hidden";
        form.appendChild(element7);

        element8.value = formParams.hash;
        element8.name = "hash";
        element8.type = "hidden";
        form.appendChild(element8);

        element9.value = "college_split";
        element9.name = "payment_params";
        element9.type = "hidden";
        form.appendChild(element9);

        element10.value = formParams.settlement;
        element10.name = "xml_data";
        element10.type = "hidden";
        form.appendChild(element10);

        document.body.appendChild(form);
        console.log(form);
        form.submit();
    });
</script>
@yield('js')
