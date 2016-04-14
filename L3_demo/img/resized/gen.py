#<a href="path/to/myimage1_original.jpg">
 #           <img alt="Title 1" src="path/to/myimage1_thumbnail.jpg" />
 #         </a>

numfiles = 12
# justified gallery
"""
for i in range(1,numfiles+1):
	print('<a href="img/resized/{}.jpg">'.format(str(i).zfill(4)))
	print('<img alt="Title {}" src="img/resized/{}.jpg" />'.format(i,str(i).zfill(4)))
	print('</a>')
"""


#

for i in range(1,numfiles+1):
        #print('<img src="img/resized/{}.jpg" width="1200" />'.format(str(i).zfill(4)))
        print('<img src="img/resized/{0}.jpg" width="1200" data-highres="img/resized/{0}.jpg" />'.format(str(i).zfill(4)))
        #<img src="img/resized/0001.jpg" width="1024" data-highres="img/demo/withhearts3-highres.jpg"/>



# lightbox 2
"""
for i in range(1,numfiles+1):
        print('<a href="img/resized/{0}.jpg" data-lightbox="lightbox-gallery" data-title="My caption {0}"><img class="img-thumbnail col-lg-2 col-sm-3 col-xs-4" src="img/resized/{0}.jpg" /></a>'.format(str(i).zfill(4)))
"""
#colorbox
"""
for i in range (1,numfiles+1):
        print('<p>\n\t<a class="group1" href="img/resized/{0}.jpg" title="alt text {0}">\n\t\t<img class="img-thumbnail col-lg-2 col-sm-3 col-xs-4" src="img/resized/{0}.jpg" />\n\t</a>\n</p>'.format(str(i).zfill(4)))
"""   

#pikachoose
"""
for i in range(1,numfiles+1):
        print('<li><a href="#"><img src="img/resized/{0}.jpg"/></a><span>Photo {0}.</span></li>')
"""        





#owl
"""
for i in range(1,numfiles+1):
        print('<div><img src="img/resized/{0}.jpg" /></div>'.format(str(i).zfill(4)))
        """















        
