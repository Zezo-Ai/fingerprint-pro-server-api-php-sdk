module.exports = {
    
    "branches": [
        "main",
        {
            "name": "develop",
            "prerelease": true,
        }
    ],
    "plugins": [
        [
            "@semantic-release/commit-analyzer",
            {
                "releaseRules": [
                    {
                        "type": "build",
                        "scope": "deps",
                        "release": "patch"
                    },
                    {
                        "type": "docs",
                        "scope": "README",
                        "release": "patch"
                    }
                ]
            }
        ],
        [
            "@semantic-release/release-notes-generator",
            {
                "preset": "conventionalCommits",
                "presetConfig": {
                    "types": [
                        {
                            "type": "feat",
                            "section": "Features"
                        },
                        {
                            "type": "feature",
                            "section": "Features"
                        },
                        {
                            "type": "fix",
                            "section": "Bug Fixes"
                        },
                        {
                            "type": "perf",
                            "section": "Performance Improvements"
                        },
                        {
                            "type": "revert",
                            "section": "Reverts"
                        },
                        {
                            "type": "docs",
                            "scope": "README",
                            "section": "Documentation"
                        },
                        {
                            "type": "build",
                            "scope": "deps",
                            "section": "Build System"
                        },
                        {
                            "type": "docs",
                            "section": "Documentation",
                            "hidden": true
                        },
                        {
                            "type": "style",
                            "section": "Styles",
                            "hidden": true
                        },
                        {
                            "type": "chore",
                            "section": "Miscellaneous Chores",
                            "hidden": true
                        },
                        {
                            "type": "refactor",
                            "section": "Code Refactoring",
                            "hidden": true
                        },
                        {
                            "type": "test",
                            "section": "Tests",
                            "hidden": true
                        },
                        {
                            "type": "build",
                            "section": "Build System",
                            "hidden": true
                        },
                        {
                            "type": "ci",
                            "section": "Continuous Integration",
                            "hidden": true
                        }
                    ]
                }
            }
        ],
        [
            "@semantic-release/changelog",
            {
                "changelogFile": "CHANGELOG.md"
            }
        ],
        [
            "@semantic-release/exec",
            {
                "prepareCmd": "bash ./scripts/generate.sh -v ${nextRelease.version}"
            }
        ],
        [
            "@semantic-release/git",
            {
                "assets": [
                    "CHANGELOG.md",
                    "README.md",
                    "config.json",
                    "composer.json",
                    "docs/**/*",
                    "src/**/*"
                ]
            }
        ],
        "@semantic-release/github"
    ]
}