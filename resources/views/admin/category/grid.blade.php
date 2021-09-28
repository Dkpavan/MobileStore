@extends('admin.layout.main')
@section('content')
<div class="container" style="margin-top:30px;">
  <div class="row">
    <div class="col-md-4">
      <ul id="tree1">
        <p  style="height:20px;">
        <!-- <br> <code>$('#tree1').treed();</code> -->
        </p>
        <li><a href="#">TECH</a>

          <ul>
            <li>Company Maintenance</li>
            <li>Employees
              <ul>
                <li>Reports
                  <ul>
                    <li>Report1</li>
                    <li>Report2</li>
                    <li>Report3</li>
                  </ul>
                </li>
                <li>Employee Maint.</li>
              </ul>
            </li>
            <li>Human Resources</li>
          </ul>
        </li>
        <li>XRP
          <ul>
            <li>Company Maintenance</li>
            <li>Employees
              <ul>
                <li>Reports
                  <ul>
                    <li>Report1</li>
                    <li>Report2</li>
                    <li>Report3</li>
                  </ul>
                </li>
                <li>Employee Maint.</li>
              </ul>
            </li>
            <li>Human Resources</li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="col-md-4">
      <p style="height:20px;">

        <!-- <br /> <code>$('#tree2').treed({openedClass : 'glyphicon-folder-open', closedClass : 'glyphicon-folder-close'});</code> -->

      </p>
      <ul id="tree2">
        <li><a href="#">TECH</a>

          <ul>
            <li>Company Maintenance</li>
            <li>Employees
              <ul>
                <li>Reports
                  <ul>
                    <li>Report1</li>
                    <li>Report2</li>
                    <li>Report3</li>
                  </ul>
                </li>
                <li>Employee Maint.</li>
              </ul>
            </li>
            <li>Human Resources</li>
          </ul>
        </li>
        <li>XRP
          <ul>
            <li>Company Maintenance</li>
            <li>Employees
              <ul>
                <li>Reports
                  <ul>
                    <li>Report1</li>
                    <li>Report2</li>
                    <li>Report3</li>
                  </ul>
                </li>
                <li>Employee Maint.</li>
              </ul>
            </li>
            <li>Human Resources</li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="col-md-4">
      <p  style="height:20px;">

        <!-- <br /> <code>$('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});</code> -->

      </p>
      <ul id="tree3">
        <li><a href="#">TECH</a>

          <ul>
            <li>Company Maintenance</li>
            <li>Employees
              <ul>
                <li>Reports
                  <ul>
                    <li>Report1</li>
                    <li>Report2</li>
                    <li>Report3</li>
                  </ul>
                </li>
                <li>Employee Maint.</li>
              </ul>
            </li>
            <li>Human Resources</li>
          </ul>
        </li>
        <li>XRP
          <ul>
            <li>Company Maintenance</li>
            <li>Employees
              <ul>
                <li>Reports
                  <ul>
                    <li>Report1</li>
                    <li>Report2</li>
                    <li>Report3</li>
                  </ul>
                </li>
                <li>Employee Maint.</li>
              </ul>
            </li>
            <li>Human Resources</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
@stop
