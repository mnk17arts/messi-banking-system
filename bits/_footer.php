
    <div class="container mt-4">
        <div class="text-center" style="color:#ff5059"><h6> designed & developed by <a href="http://linkedin.com/in/mnk17arts"  target="_blank" style="color:orangered;" rel="noopener noreferrer">mnk17arts</a></h6></div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Data Tables js -->
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
    <script>
    home = document.getElementById('homebtn');
    home.addEventListener("click", () => {
            console.log("home ");
            window.location = 'index.php';
        })

    loc = document.getElementById('customersbtn');
    loc.addEventListener("click", () => {
            console.log("list of customers ");
            window.location = 'listofc.php';
        })

    views = document.getElementsByClassName('viewacc');
    Array.from(views).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("view ");
            sno = e.target.id //.substr(1);
            console.log(e.target.id);
            window.location = 'viewaccount.php?v=' + `${sno}`;
        })
    })

    txns = document.getElementById('transactionsbtn');
    txns.addEventListener("click", () => {
            console.log("transactions ");
            window.location = 'trxns.php';
        })

    </script>
