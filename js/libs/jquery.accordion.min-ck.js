/* http://samcroft.co.uk/2011/mobile-webkit-accordion-jquery-plugin/ */(function(e){e.fn.accordion=function(){var t=this,n;n=new Array;t.addClass("enhance");t.find("dd").each(function(t){var r=e(this);n[t]=r.height();r.addClass("closed")});var r=location.hash,i=t.find('dt a[href="'+r+'"]');if(i.length){var s=i.parent().next("dd"),o=s.index("dd");s.attr("id","active").css("height",n[o]+"px").removeClass("closed")}t.find("dt a").bind("touchstart",function(t){t.preventDefault();var r=e(this).parent().next("dd"),i=r.index("dd");if(r.attr("id")=="active"){r.removeAttr("id").removeAttr("style").addClass("closed");location.hash=""}else{var s=r.parent().find("#active");s&&s.removeAttr("id").removeAttr("style").addClass("closed");r.attr("id","active").css("height",n[i]+"px").removeClass("closed");location.hash=e(this).attr("href")}})}})(jQuery);