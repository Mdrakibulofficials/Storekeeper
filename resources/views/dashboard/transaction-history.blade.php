
@extends('layouts.app') {{-- Assuming you have a layout file, you can customize this based on your project structure --}}

@section('content')
    <h2>Transaction History</h2>
    
    <table>
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Total Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Product A</td>
                <td>2</td>
                <td>$20.00</td>
                <td>2023-01-01 10:00:00</td>
            </tr>
        </tbody>
    </table>
@endsection
