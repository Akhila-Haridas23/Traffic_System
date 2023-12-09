import cv2

import numpy as np

import os

from mHelmet import cHelmet

class cCamera( cHelmet ) :

    def __init__( self, **kwargs ) :

        super( cCamera, self ).__init__( )

        if 'src' in kwargs :

            self.SRC = kwargs[ 'src' ]

        else :

            self.SRC = 0

        if 'verbose' in kwargs :

            self.vVERBOSE = kwargs[ 'verbose' ]

        #super( cCamera, self ).__init__( )

        #self.oCam = cv2.VideoCapture( self.SRC, cv2.CAP_DSHOW )

        self.oCam = cv2.VideoCapture( self.SRC )

        self.vQUIT = False

        vRECORD_TO = 'frames/'

        if not os.path.exists( vRECORD_TO ) :

            os.mkdir( vRECORD_TO )

    def fRead( self ) :

        _, self.vFrame = self.oCam.read( )

    def fDisplay( self, **kwargs ) :

        if 'fvImage' in kwargs :

            cv2.imshow( kwargs[ 'fvWinName' ], kwargs[ 'fvImage' ] )

        else :

            cv2.imshow( 'IMAGE', self.vFrame )

    def fQuit( self ) :

        if cv2.waitKey( 10 ) == ord( 'q' ) :

            self.vQUIT = True

    def fRecordRead( self ) :

        return self.oCam.read( )

    def fDelFile( self, fvPath ) :

        for vFName in os.listdir( fvPath ) :

            os.unlink( 'frames/' + vFName )

    def fMainLoop( self ) :

        while True :

            self.fRead( )

            #print( '[ DEBUG ] Shape of frame : {}'.format( self.vFrame.shape ) )

            self.fDisplay( )

            vKey = cv2.waitKey( 1 )

            if vKey == ord( 'r' ) :

                cv2.destroyWindow( 'IMAGE' )

                print( '[ DEBUG ] Recording...' )

                vFileId = 0

                while True :

                    self.fRead( )

                    self.fDisplay( )

                    cv2.imwrite( 'frames/frame_{}.jpg'.format( vFileId ), self.vFrame )

                    vFileId += 1

                    if cv2.waitKey( 1 ) ==ord( 's' ) :

                        print( '[ DEBUG ] Recording stopped.' )

                        break

                cv2.destroyWindow( 'IMAGE' )

            elif vKey == ord( 'd' ) :

                print( '[ DEBUG ] Deleting recorded files...' )

                self.fDelFile( 'frames/' )
            
            elif vKey == ord( 'q' ) :

                break

            elif vKey == ord( 'p' ) :

                cv2.destroyWindow( 'IMAGE' )

                for vFName in os.listdir( 'frames' ) :

                    print( '[ DEBUG ] File : {}'.format( vFName ) )

                    self.fHelmetMain( cv2.imread( 'frames/' + vFName ) )

            '''

            self.fHelmetMain( self.vFrame )

            self.fDisplay( )

            self.fQuit( )

            if self.vQUIT :

                break

            '''
