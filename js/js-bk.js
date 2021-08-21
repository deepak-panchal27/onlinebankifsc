var IsMobile;
					if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
						IsMobile = true;
					}
					var a = document.createElement('a');
					a.href = "https://onlinebankifsc.com/";
					a.className = "navbar-brand mr-3";
					var img = document.createElement('img');
					if (IsMobile) {
						img.src= "https://onlinebankifsc.com/images/72x72.png";
					} else {
						img.src= "https://onlinebankifsc.com/images/100x100.png";
					}
					img.setAttribute('alt','logo');
					a.appendChild(img);
                    document.querySelector('.order-first').insertAdjacentElement("beforebegin", a);
                    


            $(document).ready(function() {
			if (window.location.href == "https://onlinebankifsc.com/") {
				$('#home').addClass('active');
			}
			if (window.location.pathname.split('/')[1] == "bank-list") {
				$('#bankname').addClass('active');
			}
			if (window.location.pathname.split('/')[1] == "bank") {
				$('#bankname').addClass('active');
				$('.bg').css('height', '100%');
			}
			if (window.location.pathname.split('/')[1] == "branch") {
				$('#bankname').addClass('active');
				$('.bg').css('height', '100%');
			}
			if (window.location.pathname.split('/')[1] == "search-bank") {
				$('#ifscsearch').addClass('active');
				$('.bg').css('height', '100vh');
				$('footer').parent().addClass('footer');
			}
			if (window.location.pathname.split('/')[1] == "about-us") {
				$('#about').addClass('active');
				$('.bg').css('height', '100%');
			}
			if (window.location.pathname.split('/')[1] == "contact-us") {
				$('#contact').addClass('active');
				$('.bg').css('height', '100vh');
				$('footer').parent().addClass('footer');
			}
			if (IsMobile && $('ol').hasClass('centered')) {
				$('.centered').css('padding-left', '10px');
			}
        });
        




        	$(document).ready(function() {
			if (IsMobile) {
				$("select").css("width", "200px");
			} else {
				$("select").css("width", "500px");
			}
			$("select").select2();
			$("#bank").find("span")[2].style.backgroundColor = 'yellow';
			$("select.bank").change(function() {
				$("#bank").find("span")[2].style.backgroundColor = '';
				$("#branch").find("span")[2].style.backgroundColor = '';
				$("#district").find("span")[2].style.backgroundColor = '';
				$("select.state").removeAttr('disabled');
				$("#state").find("span")[2].style.backgroundColor = 'yellow';
				$("select.district").empty();
				$("select.district").append($('<option></option>').text('Select State Above First'));
				$("select.district").attr('disabled', 'disabled');
				$("select.branch").empty();
				$("#details").parent().removeClass('box');
				$("#details").empty();
				$("select.branch").append($('<option></option>').text('Select District Above First'));
				$("select.branch").attr('disabled', 'disabled');
				var selectedBank = $(this).children("option:selected").val();
				$.ajax({
					url: "api/stateapi.php?bank_name=" + selectedBank,
					success: function(result) {
						$("select.state").empty();
						$("select.state").append($('<option></option>').text('Select State'));
						$.each(JSON.parse(result), function(key, entry) {
							$("select.state").append($('<option></option>').attr('value', entry.value).attr('data-bankname', entry.bankname).text(entry.value));
						});
					}
				});
			});
			$("select.state").change(function() {
				var selectedState = $(this).children("option:selected").val();
				var bankname = $(this).children("option:selected").data('bankname');
				if (selectedState == "Select State") {
					return false;
				}
				$("#state").find("span")[2].style.backgroundColor = '';
				$("#branch").find("span")[2].style.backgroundColor = '';
				$("select.district").removeAttr('disabled');
				$("#district").find("span")[2].style.backgroundColor = 'yellow';
				$("select.branch").empty();
				$("select.branch").attr('disabled', 'disabled');
				$("select.branch").append($('<option></option>').text('Select District Above First'));
				$("#details").parent().removeClass('box');
				$("#details").empty();
				$.ajax({
					url: "api/districtapi.php?bank_name=" + bankname + "&state_name=" + selectedState,
					success: function(result) {
						$("select.district").empty();
						$("select.district").append($('<option></option>').text('Select District'));
						$.each(JSON.parse(result), function(key, entry) {
							$("select.district").append($('<option></option>').attr('value', entry.value).attr('data-bankname', entry.bankname).attr('data-statename', entry.statename).text(entry.value));
						});
					}
				});
			});
			$("select.district").change(function() {
				var districtname = $(this).children("option:selected").val();
				var bankname = $(this).children("option:selected").data('bankname');
				var selectedState = $(this).children("option:selected").data('statename');
				if (districtname == "Select District") {
					return false;
				}
				$("#district").find("span")[2].style.backgroundColor = '';
				$("select.branch").removeAttr('disabled');
				$("#branch").find("span")[2].style.backgroundColor = 'yellow';
				$("#details").parent().removeClass('box');
				$("#details").empty();
				$.ajax({
					url: "api/branchapi.php?bank_name=" + bankname + "&state_name=" + selectedState + "&district_name=" + districtname,
					success: function(result) {
						$("select").select2();
						$("select.branch").empty();
						$("#branch").find("span")[2].style.backgroundColor = 'yellow';
						$("select.branch").append($('<option></option>').text('Select Branch'));
						$.each(JSON.parse(result), function(key, entry) {
							$("select.branch").append($('<option></option>').attr('id', entry.id).text(entry.value));
						});
					}
				});
			});
			$("select.branch").change(function() {
				$("#branch").find("span")[2].style.backgroundColor = '';
				var branchid = $(this).children("option:selected").attr('id');
				if (branchid == undefined || branchid == '' || branchid == null) {
					return false;
				}
				$.ajax({
					url: "api/detailsapi.php?branch_id=" + branchid,
					success: function(result) {
						$("#details").parent().addClass('box');
						$("#details").html(result);
					}
				});
			});
		});

		function myFunction() {
			var copyText = document.getElementById("myInput");
			copyText.select();
			copyText.setSelectionRange(0, 99999);
			document.execCommand("copy");
			document.querySelector('.tooltiptext').setAttribute('style','visibility:visible');
		}