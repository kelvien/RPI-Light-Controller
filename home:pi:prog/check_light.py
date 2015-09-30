import RPi.GPIO as GPIO
def check():
	GPIO.setmode(GPIO.BCM)
	GPIO.setup(25, GPIO.OUT)
	if GPIO.input(25) == 0:
		return "On"
	else:
		return "Off"

check()
