#!/usr/bin/env python3
# -*- coding: utf-8 -*-

import tornado.ioloop
import tornado.web
 

def times(a,b):
    c = int(a) * int(b)
    return str(c)


class MainHandler(tornado.web.RequestHandler):
    def get(self):
        """get请求"""
        a = self.get_argument('a')
        b = self.get_argument('b')
        c  = times(int(a), int(b))
        self.write("c times =" + str(c))
 
application = tornado.web.Application([(r"/add", MainHandler), ])
 
if __name__ == "__main__":
    application.listen(8868)
    tornado.ioloop.IOLoop.instance().start()