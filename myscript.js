
			var image=[
			"elonmusk.jpg",
			"jobs.jpg",
			"sunder.jpg",
			"tata.jpg",
			"satya.jpg",
			"timcook.jpg",
			"jeff.jpg",
			"bill.jpg",
			"zuckerberg.jpg",
			"shinchan.jpg",
			"result.jpg"];
			var valuation = [1,1,1,1,1,1,1,1,1,1,1];
			
			function changeImg1()
			{
					for(var i=0;i<11;i++)
					{
						if(valuation[i]==1)
						{
							valuation[i]=0;
							
							document.getElementById("testing1").src= image[i];
							break;
						}
						
					}

			}

			function changeImg2()
			{
					for(var i=0;i<11;i++)
					{
						if(valuation[i]==1)
						{
							valuation[i]=0;
							
							document.getElementById("testing2").src= image[i];
							break;
						}
						
					}

			}
		
	
			