@extends('gateway.layouts.app')

@section('title')
    Services [Product List] - AIS
@endsection

@section('content')

{{-- Eccomerce Products List --}}
<section class="container my-5">
    <h2 class="mb-4 text-center">Order Status Table</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>S/N</th>
                    <th>Order ID</th>
                    <th>Order Date</th>
                    <th>Name of Candidate</th>
                    <th>Requestor</th>
                    <th>Status</th>
                    <th>Status Icon</th>
                    <th>Remarks</th>
                    <th>Last Updated</th>
                </tr>
            </thead>
            <tbody>
                <tr onclick="window.location='ais-gateway/product-details';" style="cursor: pointer;">
                    <td>1</td>
                    <td>2024-001</td>
                    <td>2024-10-01</td>
                    <td>John Doe</td>
                    <td>Jane Smith</td>
                    <td>Completed</td>
                    <td class="text-center"><span class="text-success">&#128994;</span></td>
                    <td>Payment outstanding</td>
                    <td>2024-10-02</td>
                </tr>      
                <tr>
                    <td>2</td>
                    <td>2024-002</td>
                    <td>2024-10-03</td>
                    <td>Mary Johnson</td>
                    <td>Tom Brown</td>
                    <td>Pending</td>
                    <td class="text-center"><span class="text-warning">&#128993;</span></td>
                    <td>Pending document upload</td>
                    <td>2024-10-04</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2024-003</td>
                    <td>2024-10-05</td>
                    <td>James Wilson</td>
                    <td>Linda Green</td>
                    <td>In Progress</td>
                    <td class="text-center"><span class="text-warning">&#128993;</span></td>
                    <td>In-Progress</td>
                    <td>2024-10-06</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2024-004</td>
                    <td>2024-10-07</td>
                    <td>Patricia Garcia</td>
                    <td>Michael White</td>
                    <td>Cancelled</td>
                    <td class="text-center"><span class="text-danger">&#128996;</span></td>
                    <td>Additional documents required</td>
                    <td>2024-10-08</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2024-005</td>
                    <td>2024-10-09</td>
                    <td>Robert Martinez</td>
                    <td>Sarah Davis</td>
                    <td>Completed</td>
                    <td class="text-center"><span class="text-success">&#128994;</span></td>
                    <td>Processing additional documents received</td>
                    <td>2024-10-10</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>2024-006</td>
                    <td>2024-10-11</td>
                    <td>Linda Rodriguez</td>
                    <td>David Lee</td>
                    <td>Pending</td>
                    <td class="text-center"><span class="text-warning">&#128993;</span></td>
                    <td>Pending MOM outcome</td>
                    <td>2024-10-12</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>2024-007</td>
                    <td>2024-10-13</td>
                    <td>Charles Lopez</td>
                    <td>Laura Hall</td>
                    <td>In Progress</td>
                    <td class="text-center"><span class="text-warning">&#128993;</span></td>
                    <td>MOM approved - Pending pass issuance in Singapore</td>
                    <td>2024-10-14</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>2024-008</td>
                    <td>2024-10-15</td>
                    <td>Barbara Walker</td>
                    <td>James Young</td>
                    <td>Completed</td>
                    <td class="text-center"><span class="text-success">&#128994;</span></td>
                    <td>Completed</td>
                    <td>2024-10-16</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>2024-009</td>
                    <td>2024-10-17</td>
                    <td>William Hill</td>
                    <td>Kimberly King</td>
                    <td>Cancelled</td>
                    <td class="text-center"><span class="text-danger">&#128996;</span></td>
                    <td>Cancelled</td>
                    <td>2024-10-18</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>



@endsection

@section('scripts')
    <script>
        console.log("users view");
    </script>
@endsection