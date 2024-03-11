<x-default-layout>

    @section('title')
        Details
    @endsection

    
    <x-user-details :vv="$vv"/>

    {{-- <label for="grades">Select grade:</label>
    <select id="grades" onchange="showHideDiv()">
        <option value="none">None</option>
        <option value="block">Grade</option>
        <!-- Add more options if needed -->
    </select>
    
    <div id="myDiv">
        <h2>Grade Selected</h2>
        <!-- Content of the div -->
    </div> --}}

    
    
</x-default-layout>
