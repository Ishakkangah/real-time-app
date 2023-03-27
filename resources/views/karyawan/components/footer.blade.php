  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

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