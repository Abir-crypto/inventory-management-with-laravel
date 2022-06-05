<template>
    <div class="row border shadow m-3 p-4">

        <div class="row">
            <h3 style="width: fit-content">Color Family Images </h3>
            <p style="width: fit-content">(image can't be bigger than 2400*2400px)</p>
        </div>



        <div class="col-sm-1">
            <h3>Color</h3>
            <button class="btn-danger">Delete</button>
        </div>
        <div class="col-sm-5">

        </div>
        <div class="col-sm-6">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Size</th>
                    <th scope="col">Stock Quantity</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>XL</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td >Larry the Bird</td>
                    <td >Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>

export default {
    data:function (){
        return{

        }
    },
    methods:function (){

    }
}

</script>
