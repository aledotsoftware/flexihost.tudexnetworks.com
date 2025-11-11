@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Plans & Pricing') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Plan</th>
                                <th scope="col">Price</th>
                                <th scope="col">Features</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Starter</td>
                                <td>$10/month</td>
                                <td>PHP, 1 Database, 1GB Storage</td>
                            </tr>
                            <tr>
                                <td>Pro</td>
                                <td>$25/month</td>
                                <td>PHP, Node, 5 Databases, 10GB Storage, n8n</td>
                            </tr>
                            <tr>
                                <td>Business</td>
                                <td>$50/month</td>
                                <td>PHP, Node, Unlimited Databases, 50GB Storage, n8n, VM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
