<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff5092c787920ad543f64e3ef8a82648
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '2a3c2110e8e0295330dc3d11a4cbc4cb' => __DIR__ . '/..' . '/php-webdriver/webdriver/lib/Exception/TimeoutException.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\DomCrawler\\' => 29,
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
        'F' => 
        array (
            'Facebook\\WebDriver\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\DomCrawler\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dom-crawler',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'Facebook\\WebDriver\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-webdriver/webdriver/lib',
        ),
    );

    public static $classMap = array (
        'Applitools\\ActualAppOutput' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/metadata/ActualAppOutput.php',
        'Applitools\\Annotations' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/metadata/Annotations.php',
        'Applitools\\AppEnvironment' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/AppEnvironment.php',
        'Applitools\\AppOutput' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/match/AppOutput.php',
        'Applitools\\AppOutputProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/AppOutputProvider.php',
        'Applitools\\AppOutputProviderRedeclared' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/AppOutputProviderRedeclared.php',
        'Applitools\\AppOutputWithScreenshot' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/AppOutputWithScreenshot.php',
        'Applitools\\AppiumJsCommandExtractor' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/AppiumJsCommandExtractor.php',
        'Applitools\\ArgumentGuard' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/utils/ArgumentGuard.php',
        'Applitools\\BaselineEnv' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/metadata/BaselineEnv.php',
        'Applitools\\BatchInfo' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/BatchInfo.php',
        'Applitools\\Branch' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/metadata/Branch.php',
        'Applitools\\CompareAndCopyBlockChannelDataResult' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/utils/CompareAndCopyBlockChannelDataResult.php',
        'Applitools\\CoordinatesType' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/CoordinatesType.php',
        'Applitools\\CutProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/CutProvider.php',
        'Applitools\\DebugScreenshotsProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/debug/DebugScreenshotsProvider.php',
        'Applitools\\ExactMatchSettings' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/match/ExactMatchSettings.php',
        'Applitools\\Exceptions\\CoordinatesTypeConversionException' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/exceptions/CoordinatesTypeConversionException.php',
        'Applitools\\Exceptions\\DiffsFoundException' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/exceptions/DiffsFoundException.php',
        'Applitools\\Exceptions\\EyesException' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/exceptions/EyesException.php',
        'Applitools\\Exceptions\\IllegalStateException' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/exceptions/IllegalStateException.php',
        'Applitools\\Exceptions\\NewTestException' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/exceptions/NewTestException.php',
        'Applitools\\Exceptions\\OutOfBoundsException' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/exceptions/OutOfBoundsException.php',
        'Applitools\\Exceptions\\TestFailedException' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/exceptions/TestFailedException.php',
        'Applitools\\ExpectedAppOutput' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/metadata/ExpectedAppOutput.php',
        'Applitools\\EyesBase' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/EyesBase.php',
        'Applitools\\EyesImagesScreenshot' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.images.php/EyesImagesScreenshot.php',
        'Applitools\\EyesScreenshot' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/EyesScreenshot.php',
        'Applitools\\EyesScreenshotFactory' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/EyesScreenshotFactory.php',
        'Applitools\\FailureReports' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/FailureReports.php',
        'Applitools\\FileDebugScreenshotsProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/debug/FileDebugScreenshotsProvider.php',
        'Applitools\\FileLogger' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/logging/FileLogger.php',
        'Applitools\\FixedCutProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/FixedCutProvider.php',
        'Applitools\\FixedScaleProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/scaling/FixedScaleProvider.php',
        'Applitools\\FixedScaleProviderFactory' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/scaling/FixedScaleProviderFactory.php',
        'Applitools\\FloatingMatchSettings' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/match/FloatingMatchSettings.php',
        'Applitools\\GeneralUtils' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/utils/GeneralUtils.php',
        'Applitools\\ImageDeltaCompressor' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/utils/ImageDeltaCompressor.php',
        'Applitools\\ImageIdentifier' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/metadata/ImageIdentifier.php',
        'Applitools\\ImageMatchSettings' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/match/ImageMatchSettings.php',
        'Applitools\\ImageProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/ImageProvider.php',
        'Applitools\\ImageUtils' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/utils/ImageUtils.php',
        'Applitools\\Images\\Eyes' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.images.php/Eyes.php',
        'Applitools\\ImgMatchSettings' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/metadata/ImgMatchSettings.php',
        'Applitools\\InvalidPositionProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/InvalidPositionProvider.php',
        'Applitools\\Location' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/Location.php',
        'Applitools\\LogHandler' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/logging/LogHandler.php',
        'Applitools\\Logger' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/logging/Logger.php',
        'Applitools\\MatchLevel' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/match/MatchLevel.php',
        'Applitools\\MatchResult' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/match/MatchResult.php',
        'Applitools\\MatchWindowData' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/match/MatchWindowData.php',
        'Applitools\\MatchWindowTask' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/MatchWindowTask.php',
        'Applitools\\MouseAction' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/MouseAction.php',
        'Applitools\\MouseTrigger' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/triggers/MouseTrigger.php',
        'Applitools\\NullCutProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/NullCutProvider.php',
        'Applitools\\NullDebugScreenshotProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/debug/NullDebugScreenshotProvider.php',
        'Applitools\\NullLogHandler' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/logging/NullLogHandler.php',
        'Applitools\\NullRegionProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/NullRegionProvider.php',
        'Applitools\\NullScaleProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/scaling/NullScaleProvider.php',
        'Applitools\\Options' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/match/Options.php',
        'Applitools\\PositionMemento' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/PositionMemento.php',
        'Applitools\\PositionProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/PositionProvider.php',
        'Applitools\\PrintLogHandler' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/logging/PrintLogHandler.php',
        'Applitools\\PropertyData' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/server/PropertyData.php',
        'Applitools\\PropertyHandler' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/utils/PropertyHandler.php',
        'Applitools\\ProxySettings' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/server/ProxySettings.php',
        'Applitools\\ReadOnlyPropertyHandler' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/utils/ReadOnlyPropertyHandler.php',
        'Applitools\\RectangleSize' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/RectangleSize.php',
        'Applitools\\Region' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/Region.php',
        'Applitools\\RegionProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/RegionProvider.php',
        'Applitools\\RunningSession' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/server/RunningSession.php',
        'Applitools\\ScaleMethod' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/scaling/ScaleMethod.php',
        'Applitools\\ScaleProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/scaling/ScaleProvider.php',
        'Applitools\\ScaleProviderFactory' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/scaling/ScaleProviderFactory.php',
        'Applitools\\ScaleProviderIdentityFactory' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/scaling/ScaleProviderIdentityFactory.php',
        'Applitools\\Selenium\\BordersAwareElementContentLocationProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/BordersAwareElementContentLocationProvider.php',
        'Applitools\\Selenium\\BrowserNames' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/BrowserNames.php',
        'Applitools\\Selenium\\ContextBasedScaleProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/ContextBasedScaleProvider.php',
        'Applitools\\Selenium\\ContextBasedScaleProviderFactory' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/ContextBasedScaleProviderFactory.php',
        'Applitools\\Selenium\\CssTranslatePositionMemento' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/CssTranslatePositionMemento.php',
        'Applitools\\Selenium\\CssTranslatePositionProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/CssTranslatePositionProvider.php',
        'Applitools\\Selenium\\ElementPositionMemento' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/ElementPositionMemento.php',
        'Applitools\\Selenium\\ElementPositionProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/ElementPositionProvider.php',
        'Applitools\\Selenium\\Exceptions\\EyesDriverOperationException' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/exceptions/EyesDriverOperationException.php',
        'Applitools\\Selenium\\Exceptions\\NoFramesException' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/exceptions/NoFramesException.php',
        'Applitools\\Selenium\\Eyes' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/Eyes.php',
        'Applitools\\Selenium\\EyesKeyboard' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/triggers/EyesKeyboard.php',
        'Applitools\\Selenium\\EyesMouse' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/triggers/EyesMouse.php',
        'Applitools\\Selenium\\EyesRemoteWebElement' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/wrappers/EyesRemoteWebElement.php',
        'Applitools\\Selenium\\EyesSeleniumAgentSetup' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/EyesSeleniumAgentSetup.php',
        'Applitools\\Selenium\\EyesSeleniumUtils' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/EyesSeleniumUtils.php',
        'Applitools\\Selenium\\EyesTargetLocator' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/wrappers/EyesTargetLocator.php',
        'Applitools\\Selenium\\EyesTouchScreen' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/wrappers/EyesTouchScreen.php',
        'Applitools\\Selenium\\EyesWebDriver' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/wrappers/EyesWebDriver.php',
        'Applitools\\Selenium\\EyesWebDriverScreenshot' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/capture/EyesWebDriverScreenshot.php',
        'Applitools\\Selenium\\EyesWebDriverScreenshotFactory' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/capture/EyesWebDriverScreenshotFactory.php',
        'Applitools\\Selenium\\FirefoxRegionPositionCompensation' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/FirefoxRegionPositionCompensation.php',
        'Applitools\\Selenium\\FirefoxScreenshotImageProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/capture/FirefoxScreenshotImageProvider.php',
        'Applitools\\Selenium\\Frame' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/frames/Frame.php',
        'Applitools\\Selenium\\FrameChain' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/frames/FrameChain.php',
        'Applitools\\Selenium\\FullFrameOrElementRegionProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/FullFrameOrElementRegionProvider.php',
        'Applitools\\Selenium\\FullPageCaptureAlgorithm' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/capture/FullPageCaptureAlgorithm.php',
        'Applitools\\Selenium\\FullRegionProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/FullRegionProvider.php',
        'Applitools\\Selenium\\IRegionPositionCompensation' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/IRegionPositionCompensation.php',
        'Applitools\\Selenium\\ImageProviderFactory' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/capture/ImageProviderFactory.php',
        'Applitools\\Selenium\\ImageRotation' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/ImageRotation.php',
        'Applitools\\Selenium\\MoveToRegionVisibilityStrategy' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/regionVisibility/MoveToRegionVisibilityStrategy.php',
        'Applitools\\Selenium\\NopRegionVisibilityStrategy' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/regionVisibility/NopRegionVisibilityStrategy.php',
        'Applitools\\Selenium\\NullRegionPositionCompensation' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/NullRegionPositionCompensation.php',
        'Applitools\\Selenium\\OSNames' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/OSNames.php',
        'Applitools\\Selenium\\RegionPositionCompensationFactory' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/RegionPositionCompensationFactory.php',
        'Applitools\\Selenium\\RegionVisibilityStrategy' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/regionVisibility/RegionVisibilityStrategy.php',
        'Applitools\\Selenium\\SafariRegionPositionCompensation' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/SafariRegionPositionCompensation.php',
        'Applitools\\Selenium\\SafariScreenshotImageProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/capture/SafariScreenshotImageProvider.php',
        'Applitools\\Selenium\\ScreenshotType' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/ScreenshotType.php',
        'Applitools\\Selenium\\ScrollPositionMemento' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/ScrollPositionMemento.php',
        'Applitools\\Selenium\\ScrollPositionProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/positioning/ScrollPositionProvider.php',
        'Applitools\\Selenium\\StitchMode' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/StitchMode.php',
        'Applitools\\Selenium\\TakesScreenshotImageProvider' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/capture/TakesScreenshotImageProvider.php',
        'Applitools\\Selenium\\UserAgent' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/UserAgent.php',
        'Applitools\\Selenium\\WebDriverInfo' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/WebDriverInfo.php',
        'Applitools\\Selenium\\WebDriverScreenshot' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/capture/WebDriverScreenshot.php',
        'Applitools\\Selenium\\fluent\\FloatingRegionsBySelector' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/fluent/FloatingRegionsBySelector.php',
        'Applitools\\Selenium\\fluent\\FrameLocator' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/fluent/FrameLocator.php',
        'Applitools\\Selenium\\fluent\\ISeleniumCheckTarget' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/fluent/ISeleniumCheckTarget.php',
        'Applitools\\Selenium\\fluent\\ISeleniumFrameCheckTarget' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/fluent/ISeleniumFrameCheckTarget.php',
        'Applitools\\Selenium\\fluent\\RegionByElement' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/fluent/RegionByElement.php',
        'Applitools\\Selenium\\fluent\\RegionsBySelector' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/fluent/RegionsBySelector.php',
        'Applitools\\Selenium\\fluent\\SeleniumCheckSettings' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/fluent/SeleniumCheckSettings.php',
        'Applitools\\Selenium\\fluent\\Target' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.selenium.php/fluent/Target.php',
        'Applitools\\ServerConnector' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/server/ServerConnector.php',
        'Applitools\\ServerConnectorFactory' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/server/ServerConnectorFactory.php',
        'Applitools\\ServerConnectorInterface' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/server/ServerConnectorInterface.php',
        'Applitools\\SessionResults' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/metadata/SessionResults.php',
        'Applitools\\SessionStartInfo' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/server/SessionStartInfo.php',
        'Applitools\\SessionType' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/server/SessionType.php',
        'Applitools\\SimplePropertyHandler' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/utils/SimplePropertyHandler.php',
        'Applitools\\StartInfo' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/metadata/StartInfo.php',
        'Applitools\\TestResults' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/TestResults.php',
        'Applitools\\TestResultsStatus' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/TestResultsStatus.php',
        'Applitools\\TextTrigger' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/triggers/TextTrigger.php',
        'Applitools\\TimedAppOutput' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/TimedAppOutput.php',
        'Applitools\\Trigger' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.common.php/Trigger.php',
        'Applitools\\fluent\\CheckSettings' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/fluent/CheckSettings.php',
        'Applitools\\fluent\\FloatingRegionsByRectangle' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/fluent/FloatingRegionsByRectangle.php',
        'Applitools\\fluent\\ICheckSettings' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/fluent/ICheckSettings.php',
        'Applitools\\fluent\\ICheckSettingsInternal' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/fluent/ICheckSettingsInternal.php',
        'Applitools\\fluent\\IGetFloatingRegions' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/fluent/IGetFloatingRegions.php',
        'Applitools\\fluent\\IGetRegions' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/fluent/IGetRegions.php',
        'Applitools\\fluent\\RegionByRectangle' => __DIR__ . '/..' . '/applitools/eyes.sdk.php/eyes.sdk.php/fluent/RegionByRectangle.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitff5092c787920ad543f64e3ef8a82648::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff5092c787920ad543f64e3ef8a82648::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff5092c787920ad543f64e3ef8a82648::$classMap;

        }, null, ClassLoader::class);
    }
}