@extends('layouts.app')

@section('content')
    <div class="m-auto w-5/6 py-24">
        <div class="flex justify-center">
            <img
                src="{{ asset('images/'.$car->image_path) }}"
                class="w-1/2 shadow-xl x-12"
                alt="">
        </div>
        <div class="py-10 text-center">
            <div class="m-auto">
                <h1  class="text-5xl uppercase bold mb-8">
                    {{ $car->name }}
                </h1>
                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    Founded: {{ $car->founded }}
                </span>
                <p class="text-lg text-gray-700 py-6">
                    {{ $car ->description }}
                </p>
                <table class="table-auto w-5/6">
                    <tr class="bg-blue-100">
                        <th class="w-1/4 border-4 border-gray-500">
                            Model
                        </th>
                        <th class="w-1/4 border-4 border-gray-500">
                            Engines
                        </th>
                        <th class="w-1/4 border-4 border-gray-500">
                            Date
                        </th>
                    </tr>
                    @forelse ($car->carModel as $model)
                        <tr>
                            <td class="border-4 border-gray-500 px-4">
                                {{ $model->model_name }}
                            </td>
                            <td class="border-4 border-gray-500 px-4">
                                @foreach ($car->engines as $engine)
                                    @if ($model->id == $engine->model_id)
                                        {{ $engine->engine_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="border-4 border-gray-500 px-4">
                                {{ date('d-m-Y',strtotime
                                ($car->productionDate->created_at)) }}
                            </td>
                        </tr>
                    @empty
                        <p>No Product Found</p>
                    @endforelse
                </table>
                <p class="text-left">
                    Product Types:
                    @forelse ($car->products as $product)
                        {{ $product->name}}
                    @empty
                        <p>
                            No car product description
                        </p>
                    @endforelse
                </p>
                <hr class="mt-4 mb-8">
            </div>
        </div>
    </div>
@endsection
