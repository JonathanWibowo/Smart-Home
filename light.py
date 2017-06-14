import RPi.GPIO as GPIO

status = False

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(18, GPIO.OUT)

if status = False:
	GPIO.output(18, GPIO.HIGH)
	status = True
else
	GPIO.output(18, GPIO.LOW)
	status = False