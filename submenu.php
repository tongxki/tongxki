<style>
	.d-flex{
	display: flex;
	align-items: center;
	justify-content: space-around;
}

.dashboard-statistics{
	display: flex;
	
}

.selection {
	list-style: none;
    margin-right: 41px
}
.selection a{
text-decoration: none;
color: #000;
}

.form-control{
  height: 59px;
  padding: 0px;
  font-size: 30px;
  margin: 5px 0;
  border-radius: 5px;
  border:none;
  background-color: #e7f5fb;

}

.form-control::-webkit-input-placeholder{
	font-family: FontAwesome;
	font-weight: normal;
	overflow: visible;
	vertical-align: top;
	padding-left: 5px;
	padding-top: 2px;
}

.form-control::-moz-placeholder  { 

font-weight: normal;
overflow: visible;
vertical-align: top;
display: inline-block !important;
padding-left: 5px;
padding-top: 2px;
/*color: hsl(9, 40%, 60%);*/
}

.form-control:-ms-input-placeholder  { 

font-weight: normal;
overflow: visible;
vertical-align: top;
display: inline-block !important;
padding-left: 5px;
padding-top: 2px;
/*color: hsl(9, 40%, 60%);*/
}

</style>

<div class="d-flex">
			<h2 class="mr-2 mb-2">Analytics</h2>
			<ul class="dashboard-statistics">
				<li class="selection"><a href="#dashbaord">Dashboard</a></li>
				<li class="selection"><a href="#lead-report">Leads Report</a></li>
				<li class="selection"><a href="#click-stats">Click Stats</a></li>
			</ul>

			<form method="post" class="needs-validation" novalidate>
				<div class="input-group mb-3 input-group-sm">
				
				<input id="idxsearch" type="text" class="form-control" placeholder="&#61442; Search Dashboard" name="idxsearch" required autofocus>
				
				
			</div>
			</form>
		</div>