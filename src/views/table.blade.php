<?php
/**************             Initial Data Checking             ***********/
if(!isset($class_table))
    $class_table = config('uicomp.table.class_table');


if(!isset($class_row))
    $class_row = config('uicomp.table.class_row');


if(!isset($class_field))
    $class_field = config('uicomp.table.class_field');


?>
<!-- HTML TEMPLATE OF THE TABLE ( laraui-components ) -->
<table class="{{$class_table}}">
    <thead>
        <tr>
            {{--Logic For Getting The Headers Of Each And Every Column--}}
              @foreach( array_keys($data[0]) as $column)
                  <th> {{ $column }}</th>
              @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach( $data as $member_data)
            <tr class="{{$class_row}}">
                @foreach( $member_data as $info)
                <td  class="{{$class_field}}">{{$info}}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
