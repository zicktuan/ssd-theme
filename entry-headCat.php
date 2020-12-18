<!-- <ul class="filter" id="filter">
	<li class="frange" onclick="showFilter('listlengthFilter')">
		<span class="criteria">Đầu số</span>
		<div id="listlengthFilter" class="listprice">
			<button type="button" class="closefilter"><i class="ic-closefilter"></i></button>
			<label id="lF0" onclick="lengthFilter(0);" class="all check">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);"> Tất cả</a>
			</label>
			<label id="lF10" onclick="lengthFilter('10');">
				<i class="ic-checklist"></i>
				<a href="javascript:javascript:void(0);" class="prevent"> Sim đầu số cũ </a>
			</label>
			<label id="lF11" onclick="lengthFilter('11');">
				<i class="ic-checklist"></i>
				<a href="javascript:javascript:void(0);" class="prevent"> Sim đầu số mới </a>
			</label>
		</div>
	</li>
	<li class="frange" onclick="showFilter('listTelcoFilter')">
		<span class="criteria">
			<span class="hide480">Nhà </span>Mạng
		</span>
		<div id="listTelcoFilter" class="listprice">
			<button type="button" class="closefilter"><i class="ic-closefilter"></i></button>
			<label id="tF0" onclick="telcoFilter(0)" class="all check">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);"> Tất các mạng</a>
			</label>
			<label id="tF1" onclick="telcoFilter(1)">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);" class="prevent"> Viettel</a>
			</label>
			<label id="tF2" onclick="telcoFilter(2)">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);" class="prevent"> Vinaphone</a>
			</label>
			<label id="tF3" onclick="telcoFilter(3)">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);" class="prevent"> Mobifone</a>
			</label>
			<label id="tF4" onclick="telcoFilter(4)">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);" class="prevent"> Vietnamobile</a></label>
			<label id="tF5" onclick="telcoFilter(5)">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);" class="prevent"> Gmobile</a>
			</label>
		</div>
	</li>
	<li class="frange" onclick="showFilter('listPriceFilter');var objDiv = document.getElementById('listPriceFilter');objDiv.scrollTop = objDiv.scrollHeight;" style=" display: none; ">
		<span class="criteria">
			<span class="hide480">Khoảng </span>Giá
		</span>
		<div id="listPriceFilter" class="listprice">
			<button type="button" class="closefilter"><i class="ic-closefilter"></i></button>
			<label id="pF0" onclick="priceFilter(0);" class="all check">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);"> Tất cả mức giá</a>
			</label>
			<label id="pF01" onclick="priceFilter('0,1');">
				<i class="ic-checklist"></i>
				<a href="javascript:javascript:void(0);" class="prevent"> Dưới 1 triệu </a>
			</label>
			<label id="pF13" onclick="priceFilter('1,3');">
				<i class="ic-checklist"></i>
				<a href="javascript:javascript:void(0);" class="prevent"> 1 - 3 triệu </a>
			</label>
			<label id="pF35" onclick="priceFilter('3,5');">
				<i class="ic-checklist"></i>
				<a href="javascript:javascript:void(0);" class="prevent"> 3 - 5 triệu </a>
			</label>
			<label id="pF510" onclick="priceFilter('5,10');">
				<i class="ic-checklist"></i>
				<a href="javascript:javascript:void(0);" class="prevent"> 5 - 10 triệu </a>
			</label>
			<label id="pF1020" onclick="priceFilter('10,20');">
				<i class="ic-checklist"></i>
				<a href="javascript:javascript:void(0);" class="prevent"> 10 - 20 triệu </a>
			</label>
			<label id="pF2050" onclick="priceFilter('20,50');">
				<i class="ic-checklist"></i>
				<a href="javascript:javascript:void(0);" class="prevent"> 20 - 50 triệu </a>
			</label>
			<label id="pF50100" onclick="priceFilter('50,100');">
				<i class="ic-checklist"></i>
				<a href="javascript:javascript:void(0);" class="prevent"> 50 - 100 triệu </a>
			</label>
			<label id="pF1000" onclick="priceFilter('100,0');">
				<i class="ic-checklist"></i>
				<a href="javascript:javascript:void(0);" class="prevent"> Trên 100 triệu </a>
			</label>
		</div>
	</li>
	<li class="frange" onclick="showFilter('listSortFilter')">
		<span class="criteria">Sắp xếp</span>
		<div id="listSortFilter" class="listprice">
			<button type="button" class="closefilter"><i class="ic-closefilter"></i></button>
			<label id="sF0" onclick="sortFilter(0)" class="all check">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);"> Ngẫu nhiên</a>
			</label>
			<label id="sF1" onclick="sortFilter(1)">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);" class="prevent"> Giá thấp đến cao</a>
			</label>
			<label id="sF2" onclick="sortFilter(2)">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);" class="prevent"> Giá cao đến thấp</a>
			</label>
			<label id="sF3" onclick="sortFilter(3)">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);" class="prevent"> Số đẹp giá tốt </a>
			</label>
			<label id="sF4" onclick="sortFilter(4)">
				<i class="ic-checklist"></i>
				<a href="javascript:void(0);" class="prevent"> Số mới cập nhật </a>
			</label>
		</div>
	</li>
</ul> -->
<div class="choosedfilter">
	<a id="choosedfilter" class="reset" href="javascript:resetFilter();">Xóa tất cả<i class="ic-clearfil"></i></a>
</div>
<table id="contentdanhsachsim" width="100%" border="0" cellpadding="8" cellspacing="0" bgcolor="#CCCCCC" style="display:none">
	<tbody>
		<tr>
			<td id="lblLocdanhsachsim" width="0%" align="right" valign="middle" bgcolor="#FFFF99"></td>
			<td width="100%" align="left" valign="middle" bgcolor="#FFFF99">
				<form style="margin-bottom: 0px;" id="filter_form" name="filter_form" method="get" action="sim-theo-gia/duoi-500-nghin.html?do=filter">
				<select name="m10so_filter" id="m10so_filter" style="width:22%" onchange="submit_filter();">
					<option value="0">10/11 số</option>
					<option value="10">10 số</option>
					<option value="11">11 số</option>
				</select>
				&nbsp;
				<select name="price_filter" id="price_filter" style="width:22%" onchange="submit_filter();">
					<option value="0">Mức giá</option>
					<option value="0,1">Dưới 1 triệu</option>
					<option value="1,3">1 - 3 triệu</option>
					<option value="3,5">3 - 5 triệu</option>
					<option value="5,10">5 - 10 triệu</option>
					<option value="10,20">10 - 20 triệu</option>
					<option value="20,50">20 - 50 triệu</option>
					<option value="50,100">50 - 100 triệu</option>
					<option value="100,0">Trên 100 triệu</option>
				</select>
				&nbsp;
				<select name="telco_filter" id="telco_filter" style="width:22%" onchange="submit_filter();">
					<option value="0">Mạng</option>
					<option value="1">Viettel</option>
					<option value="2">Vinaphone</option>
					<option value="3">Mobifone</option>
					<option value="4">Vietnamobile</option>
					<option value="5">Gmobile</option>
				</select>&nbsp;
				<select name="giaban_filter" id="giaban_filter" style="width:22%" onchange="submit_filter();">
					<option value="0">Sắp xếp</option>
					<option value="1">Giá thấp đến cao</option>
					<option value="2">Giá cao đến thấp</option>
					<option value="3">Số đẹp giá tốt</option>
					<option value="4">Số mới cập nhật</option>
				</select>
				<select name="tragop_filter" id="tragop_filter" style="width:22%" onchange="submit_filter();">
					<option value="0">Tất cả</option>
					<option value="1">Hỗ trợ trả góp</option>
				</select>
				</form>
			</td>
		</tr>
	</tbody>
</table>