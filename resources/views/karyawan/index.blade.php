@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <h2 class="my-2 fw-bold text-center fw-bold w-100">MASTER KARYAWAN</h2>
    <table class="table">
        <thead>
            <tr class="bg-success">
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Nama</th>
                <th scope="col" class="text-center">NIK</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item,index) in data_karyawan">
                <td class="text-center">@{{ index + 1 }}</td>
                <td class="text-center">@{{ item.nama }}</td>
                <td class="text-center">@{{ item.nik }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@push('my_script')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    var vueDataKaryawan = new Vue({
        el: "#appVue",
        data: {
            data_karyawan: []
        },
        mounted() {
            this.getData();
        },
        methods: {
            getData: function() {
                let url = "{{ url('karyawan') }}";

                axios.get(url)
                    .then(resp => {
                        // console.log(resp);
                        this.data_karyawan = resp.data.data;
                    })
                    .catch(err => {
                        console.log(err);
                        alert('error');
                    })
            }
        }
    })
</script>

<script src="/js/app.js"></script>

<script>
    window.Echo.channel("messages").listen("KaryawanCreated", (event) => {
        console.log(event);
        // alert('sukses');
        vueDataKaryawan.getData();
    });
</script>
@endpush


</body>

</html>